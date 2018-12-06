<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;
use App\User;
use App\UserDetails;
use App\Vendor;
use App\VendorDetail;
use App\Organisation;
use Avatar;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-home');
    }
	
	public function LabsRequest()
    {
        return view('admin.lab-request');
    }
	
	public function VendorsRequest()
    {
        return view('admin.vendor-request');
    }
}