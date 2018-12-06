<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rfq extends Model
{
    //
    protected $fillable = [
        'vendor_id', 'lab_id','created_by','approved_by','status'
     ];
}


