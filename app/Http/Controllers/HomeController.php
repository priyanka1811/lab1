<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisation;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
		
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$i=1;
			$item=2;
        return view('home',compact('i','item'));
    }
	
}
