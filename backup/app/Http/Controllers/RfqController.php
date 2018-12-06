<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rfq;

class RfqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rfqs = Rfq::all();
        return view('rfq.list', ['rfqs'=>$rfqs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rfq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
          $category_type = $request->input('category_type');
          $catalogue= $request->input('catalogue');
          $item_name = $request->input('item_name');
          $size = $request->input('size');
          $quantity = $request->input('quantity');
          $url = $request->input('url');
          $urgent = $request->input('urgent');
          $urgent_date = $request->input('urgent_date');

          $validator = \Validator::make($request->all(),[
            'category_type.*' => 'required',
            'catalogue.*' => 'required',
            'item_name.*'=> 'required',
            'quantity.*' => 'required'
             ]);

          if ($validator->fails())
          {
            return response()->json(["code" => 404, "errors" => $validator->errors()->all()]);
          }

          $rfq = new Rfq([
            'vendor_id' => "1",
            'lab_id'=> '1'
          ]);
          
          $rfq->save();
          $currentRfqId = $rfq['id'];
          for($i=0;$i<count($catalogue);$i++){
            $urgentid = (isset($urgent[$i])) ? $urgent[$i] : 'off';
            $urgentDate = (isset($urgent_date[$i])) ? date('Y-m-d', strtotime($urgent_date[$i])) : NULL;

            DB::table('rfq_items')->insert(
                ['category_type' => $category_type[$i], 
                'catalogue' => $catalogue[$i], 
                'item_name'=>$item_name[$i], 
                'unit_size'=>$size[$i],
                'qty'=>$quantity[$i],
                'url'=>$url[$i],
                'urgent'=>$urgentid,
                'urgent_date'=>$urgentDate,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'rfq_id'=>$currentRfqId]
              );
          }
         //return redirect('/rfq');
         return response()->json(["code" => 200,"msg" => $category_type, "errors" => $validator->errors()->all()]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
