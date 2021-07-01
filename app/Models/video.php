<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    //use HasFactory;
    protected $table="video";
    
    public function chuyenmuc(){
		return $this->belongsTo('App\Models\chuyenmuc','idChuyenMuc','id');
	}
}