<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chuyenmuc extends Model
{
    use HasFactory;
    protected $table="chuyenmuc";
    public function tintuc()
    {
        return $this->hasMany('App\Models\tintuc','idChuyenMuc','id');
        return $this->hasManyThrough('App\Models\tintuc','idChuyenMuc','id');
    }
    
}
