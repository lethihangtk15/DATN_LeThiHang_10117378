<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table="comment";

    protected $fillable = ['idUser','idTinTuc','noidung','trangthai'];

    public function tintuc(){
        return $this->hasOne(tintuc::class,'id','idTinTuc');
    }


    public function user(){
        return $this->hasOne(User::class,'id','idUser');
    }

}
