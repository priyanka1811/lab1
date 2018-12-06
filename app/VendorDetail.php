<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorDetail extends Model
{
    protected $table='vendor_detail';
	
	 protected $fillable = [
        'vendor_id', 'name', 'contact', 'address', 'country', 'city', 'pin', 'pan', 'gstin', 'invoice_no', 'account', 'bank_name', 'ifsc', 'branch_name', 'bank_address', 'url', 'details', 'logo', 'sign',
    ];
	
	public function VendorDetail(){return $this->hasOne('App\Vendor','vendor_id');}
}
