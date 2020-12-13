<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    //
    public function __invoke(){

        echo 'xin chào đấy là function xin chào';
    }
}
