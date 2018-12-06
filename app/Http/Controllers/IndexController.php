<?php

namespace App\Http\Controllers;

use Session;
use Mail;
use App\User;
use App\UserDetails;

use App\Vendor;
use App\VendorDetail;

use Avatar;
use App\Mail\RequestForAccount;
use Illuminate\Http\Request;
use App\Organisation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
     	//search for organisation from register page
		public function GetOrganisation(Request $request){
			$data = Organisation::select("organisation_name as name")->where("organisation_name","LIKE","%{$request->input('query')}%")->where('status', '=', 1)->limit(5)->get();
		 return response()->json($data);
		}
		
		public function RequestForAccount()
		{
		return view('request-for-account');	
		}
		 public function Thankyou()
		{
			return view('auth.thank-you');
		}
		public function RequestAccount(Request $request)
		{
			
			
			
			if($request->profile_type=='Lab'){
				
				
			$validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            //'password' => 'required|string|min:6|confirmed',
			'phone' => 'required|string|max:25|unique:user_details',
			'institution_company' => 'required|string|max:255',
			'account_type' => 'required|string|max:255',
        	]);
			$user = User::create([
            'name' => trim($request->name),
            'email' => $request->email,
            'password' => Hash::make(str_random(8)),
        ]);
		
		
		$search_organisation = Organisation::where('organisation_name', '=', $request->institution_company)->first();
				if(count($search_organisation)==1){
				$organisation =	$search_organisation->id;
				}else{
				$create_organisation = Organisation::create([
                'organisation_name' => ucwords($request->institution_company),
                'status' => 0,
                  ]);
				  $organisation = $create_organisation->id;	
				}
		$path =  base_path().'/images/'	;
		$image = trim(str_replace(' ', '-',$request->name)).'-'.time('his').'.png';
		Avatar::create(trim($request->name))->save($path.$image, 100);
        $userdetails =  UserDetails::create([
                'user_id' => $user->id,
				'phone' =>$request->phone,
				'organisation' =>$organisation,
				'image' => $image,
            ]);
			
			
					//$email = new RequestForAccount($user,$userdetails);
					//Mail::to($data['email'])->send($email);
					Session::flash('success', 'Your request is sent to admin, you are notified once your profile has been activated by admin.');
					return redirect('thank-you');
			
		}else{
			$validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:vendors',
            //'password' => 'required|string|min:6|confirmed',
			//'phone' => 'required|string|max:25|unique:vendor_detail',
			'institution_company' => 'required|string|max:255',
			'account_type' => 'required|string|max:255',
         ]);
			
			$user = Vendor::create([
            'name' => trim($request->name),
            'email' => $request->email,
            'password' => Hash::make(str_random(8)),
        ]);
		
		
		$search_organisation = Organisation::where('organisation_name', '=', $request->institution_company)->first();
				if(count($search_organisation)==1){
				$organisation =	$search_organisation->id;
				}else{
				$create_organisation = Organisation::create([
                'organisation_name' => ucwords($request->institution_company),
                'status' => 0,
                  ]);
				  $organisation = $create_organisation->id;	
				}
        $userdetails =  VendorDetail::create([
                'vendor_id' => $user->id,
				'contact' =>$request->phone,
				'name' =>$organisation,
            ]);
			
			
					//$email = new RequestForAccount($user,$userdetails);
					//Mail::to($data['email'])->send($email);
					Session::flash('success', 'Your request is sent to admin, you are notified once your profile has been activated by admin.');
					return redirect('thank-you');
		}
		
		}
		
}
