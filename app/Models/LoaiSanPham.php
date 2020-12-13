<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{

    use HasFactory;
    protected $table = "loaisanpham";
    public $timestamps= false;

    public function sanpham(){
            return $this->hasMany(SanPham::class,'id_loaisanpham','id');
    }
    public function sanphams(){
            return $this->belongsToMany(SanPham::class,'loaisanpham_sanpham','id_loaisanpham','id_sanpham');
    }

}
