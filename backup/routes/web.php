<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

//
//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/get-organisation', 'IndexController@GetOrganisation');
Route::get('/request-for-account', 'IndexController@RequestForAccount');
Route::post('/request-account', 'IndexController@RequestAccount');
Route::get('/thank-you', 'IndexController@Thankyou');

Auth::routes();
Route::group(['middleware'=>['web','auth']],function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/rfq','RfqController@index')->name('rfq-list');
Route::get('/rfq/add','RfqController@create')->name('rfq-create');
Route::post('/rfq/store','RfqController@store')->name('rfq-store');
});

// for vendor panel
Route::group(['guard'=>['vendor']],function(){
Route::prefix('vendor')->group(function() {
    Route::get('/login', 'Auth\VendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login', 'Auth\VendorLoginController@login')->name('vendor.login.submit');
   	Route::get('/dashboard', 'VendorController@index')->name('vendor.home');
	
	Route::get('/', 'VendorController@index')->name('vendor.home');
});
});
Route::group(['guard'=>['admin']],function(){
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.home');
	Route::get('/', 'AdminController@index')->name('admin.home');
	Route::get('/labs', 'AdminController@LabsRequest')->name('admin.labs');
	Route::get('/vendors', 'AdminController@VendorsRequest')->name('admin.vendors');
});
});
//