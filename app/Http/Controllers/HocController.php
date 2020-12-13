<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response; // thư viện để tạo cookie
use Illuminate\Support\Facades\Schema; // thư viện schema database

class HocController extends Controller
{
    public function postForm (Request $Request){
        // dd($Request);
        echo $Request -> data .'<br>';
        echo $Request -> data1 ;
        // echo $Request -> all();
        // echo $Request -> only(['data1']);
    }
    public function xinchao ($a){
        //gọi về route tenRoute2
        return redirect()->route('tenRoute2');
    }
    public function path (Request $Request){
        //gọi về route tenRoute2
        return $Request->url();
    }

    public function setCookie (){
        $response = new Response;
        $response -> withCookie(
            'hoten',  // đây là tên cookie
            'Nguyễn Tiến Đạt', // đây là giá trị cookie
            1 // đây là thời gian tồn tại cookie (phút)
        );
        echo 'đã tạo côkie'.$response;
        return $response;
    }
    public function getCookie (Request $Request){
        echo 'đây là cookie';
        return $Request-> cookie('hoten');

    }

    public function postFile(Request $Request){
        //hasFile để kiểm tra có nhận được file
    if($Request->hasFile('data')){
            $Request->file('data')->move(
                'img', //nơi lưu file  (mặc định của laravel là trong public )
                'a.img'//tên file
            );
    }
    else{
        echo 'file ko tồn tại hoặc chưa được gửi';
    }
        //hasFile để kiểm tra có nhận được file
    if($Request->hasFile('data1')){
            $Request->file('data1')->move(
                'img', //nơi lưu file  (mặc định của laravel là trong public )
                'b.img'//tên file
            );
    }
    else{
        echo 'file ko tồn tại hoặc chưa được gửi';
    }


    }


    public function getJson (){

        return response()->json([
                'name'=>'TienDat',
                'diachi'=>['tinh'=>'Tuyen Quang']


        ]);
    }
    public function getJson2 (){
        $array=['Nguyen Tien Dat','Tinh'=>'Tuyen Quang','Phuong'=>'Phan Thiet'];
        return response()->json($array);
    }

    public function header(){

        //vị trí mặc định của view là views mà truy cập vào thư mục bằng dấu . thay vì /
        return view('layout.header');
    }
    public function data($parma){

        //vị trí mặc định của view là views mà truy cập vào thư mục bằng dấu . thay vì /
        return view('layout.param',['Param'=>$parma]);
    }
    public function blade ($path){
        $khoahoc= '<i>'.$path.'</i>';

        if($path=='index'){
            return view('main.index');
        }
        elseif($path=='ntd'){
            return view('main.ntd',['khoahoc'=>$khoahoc]);
        }
        elseif($path=='nth'){
            return view('main.nth');
        }


    }
    public function create(){


        if (Schema::hasTable('users')) {
            echo " tồn tại";
        }
        else{
            echo ' không tồn tại';
        }

    }

    public function xl (Request $Request){

        
            $tk = $Request->tk;
            $mk = $Request->mk;
            if(Auth::attempt(['email' => $tk, 'password' => $mk],$Request->has('remember'))){
                // dd(Auth::user()->name);
               echo  Auth::user()->name ;
            return 'oke';}
            else
            return 'that bai';


    }
}
