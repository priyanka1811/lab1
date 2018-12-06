<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
	protected $table ='organisation';
		
     protected $fillable = [
        'organisation_name', 'status',
    ];
}
