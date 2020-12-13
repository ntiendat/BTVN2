<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{

    use HasFactory;
    protected $table = "sanpham";
    public $timestamps= false;
    public function sanphams(){
        return $this->belongsToMany(LoaiSanPham::class,'loaisanpham_sanpham','id_sanpham','id_loaisanpham');
}
}
