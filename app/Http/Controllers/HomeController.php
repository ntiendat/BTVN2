<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function postForm (Request $Request){
        // echo $Request -> data .'<br>';
        // echo $Request -> data1 ;
        // echo $Request -> all();
        // echo $Request -> only(['data1']);
        $data = DB::table('thisinh')->where('id',"=",$Request->id)->get();

        foreach($data as $row){
            foreach($row as $key=> $value){
                echo $key. " : ". $value."</br>";
            }
            echo "<hr>";
    
        }
    }

    public function dangKy(){
        $data = DB::table('devvn_tinhthanhpho')->get();

        $data1=$data;

        return view('xethocba',compact('data','data1') );
    }
    public function layquanhuyen($id){
    $data = DB::table('devvn_quanhuyen')->where('matp',"=",$id)->get();
     json_encode($data);
        return json_encode($data);
    }
    
    
    public function layphuongxa($id){
    $data = DB::table('devvn_xaphuongthitran')->where('maqh',"=",$id)->get();
     json_encode($data);
        return json_encode($data);
    }




}



