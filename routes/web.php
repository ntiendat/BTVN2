<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\HocController;
// use DB;
// use Illuminate\Support\Facades\Schema;
// use App\Http\Controllers\Test;
use Illuminate\Support\Str;// thư viện Str

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',['param'=>'ahihi']);
});
//tương đương cái dưới
// Route::view('/', 'welcome');
Route::get('/welcome', function () {
    echo "<h1>hello tôi là Tiến Đạt</h1>";
});
//phải có tham số mới nhận route
// route có tham số
// ? đằng sau là tham số không bắt buộc
Route::get('/id{id?}', function ($id="") {
    echo "<h1>hello tôi là $id</h1>";
});

// route có tham số có điều kiện
Route::get('/thamsodieukien{thamso2}', function ($thamso2) {
    echo "<h1>hello tôi là $thamso2</h1>";
})->where(['thamso2'=>'[a-zA-Z]+']);


//định danh route
//cách 1
Route::get('/dinhdanh', [
    'as'=> 'tenRoute',
    function () {
    return 'route đã định danh';
    }
  ]
);
//cách 2
Route::get('/dinhdanh2', function () {
    return 'route đinh danh 2';
})->name('tenRoute2');
//gọi route
Route::get('/goiroute', function () {
    return redirect()->route('tenRoute2');
});

// Nhóm Route
// cách dùng  /tengroup/nguoidung1  /tengroup/nguoidung2
Route::group(['prefix' => 'tengroup'], function () {
    Route::get('nguoidung1', function(){echo 'đây là người dùng 1';});
    Route::get('nguoidung2', function(){echo 'đây là người dùng 2';});
});

//gọi function Controller
// Route::get('/controller/{a}','HocController@xinchao');

Route::get('/controller/{a}', [HocController::class , 'xinchao']);
// Route::get('user/{id}', [HocController::class, 'show']);

Route::get('myRequest',[HocController::class , 'path']);



//route gửi dữ liệu

Route::get('form',function(){
    return view('form');
});



Route::post('input',[ HocController::class ,'postForm' ])->name("post")->middleware('check');


//cookie
Route::get('setCookie',[HocController::class , 'setCookie']);
Route::get('getCookie',[HocController::class , 'getCookie']);

//upload file
Route::get('file',function(){
    return view('file');
});
Route::post('upfile',[ HocController::class ,'postFile' ])->name("upFile");

//Json

Route::get('setJson',[HocController::class , 'getJson']);
Route::get('setJson2',[HocController::class , 'getJson2']);


Route::get('view',[HocController::class , 'header']);
Route::get('dataview/{data}',[HocController::class , 'data']);

View::share('hoten','Nguyen Tien Dat');

Route::get('blade/{a}',[HocController::class , 'blade']);

// DATABASE
Route::get('/createdb',function(){
    Schema::create('tinh', function ($table) {
        $table->increments('id'); //Tự tăng, khóa chính
        $table->string('tentinh'); //Kiểu chuỗi $table->integer('Gia'); //Kiểu int

    });
    Schema::create('thanhpho', function ($table) {
        $table->increments('id'); //Tự tăng, khóa chính
        $table->string('tenthanhpho'); //Kiểu chuỗi $table->integer('Gia'); //Kiểu int
        $table->integer('idtinh')->unsigned();
        $table->foreign('idtinh')->references('id')->on('tinh');

    });
});
//query sql
Route::get('qb/get',function(){
    $data = DB::table('users')->get();

    foreach($data as $row){
        foreach($row as $key=> $value){
            echo $key. " : ". $value."</br>";
        }
        echo "<hr>";

    }
});

Route::get('qb/where',function(){
    $data = DB::table('users')->where('id',"=",'2')->get();

    foreach($data as $row){
        foreach($row as $key=> $value){
            echo $key. " : ". $value."</br>";
        }
        echo "<hr>";

    }
});

Route::get('qb/select',function(){
    $data = DB::table('users')->select(['id','email','password'])->where('id',"=",'2')->get();

    foreach($data as $row){
        foreach($row as $key=> $value){
            echo $key. " : ". $value."</br>";
        }
        echo "<hr>";

    }
});

Route::get('qb/update',function(){
    $data = DB::table('users')->where('name',"=",'dat')->update(['name'=>'Dat','email'=>'ahihi@gmail.com']);
    echo 'ok';

});
Route::get('qb/insert',function(){

    DB::table('users')->insert([
        //lưu ý ở những phiên bản từ laravel 6 trở lên thì str_random(3) -> str::random(3)
        ['name'=>Str::random(3),'email'=>Str::random(3).'@wru.com','password'=>bcrypt('matkhau')],
        ['name'=>Str::random(3),'email'=>Str::random(3).'@gmail.com','password'=>bcrypt('matkhau')]
    ]);

});
Route::get('qb/delete',function(){

    DB::table('users')->where('id',6)->delete();
    // reset lại bảng và chỉ số về 0
    // DB::table('users')->truncate();

});
//models
Route::get('qb/model/user/save',function(){
    //đường dẫn nhận "\" không nhận "/"
    $user = new App\Models\User();
    $user -> name = "Hạnh";
    $user -> email = "hanh@wru.vn";
    $user -> password = "Bí Mật";
    $user -> save();
});
Route::get('qb/model/user/select',function(){
    //đường dẫn nhận "\" không nhận "/"
   // Vì find là phương thức tĩnh (static) nên khi gọi chỉ cần tenClass::tenPhuongThuc().
    $user = App\Models\User::find('4');
    echo $user -> name ;
});

Route::get('qb/model/tinh/insert/{tinh}',function($tinh){
    echo $tmp =$tinh;
    $tinh = new App\Models\Tinh();
    $tinh -> tentinh = $tmp;
    $tinh->save();
});
Route::get('qb/model/tinh/getall',function(){
    $tinh = App\Models\Tinh::all()->toArray();

    foreach($tinh as $row){
        foreach($row as $key=> $value){
            echo $key. " : ". $value."</br>";
        }
        echo "<hr>";

    }
});
Route::get('qb/model/tinh/select',function(){
    $tinh = App\Models\Tinh::all()->where('tentinh','Điện Biên')->toArray();

    foreach($tinh as $row){
        foreach($row as $key=> $value){
            echo $key. " : ". $value."</br>";
        }
        echo "<hr>";

    }
});
Route::get('qb/model/tinh/destroy',function(){
    //xoá theo id
   App\Models\Tinh::destroy(5);


});
Route::get('qb/model/tinh/selectdelete',function(){
    $deletedRows = App\Models\Tinh::where('tentinh', "Điện Biên")->delete();


});

Route::get('diem',function(){
echo 'có điểm';

$a = 1;
$b = &$a;
$b++;
echo null == '' && 0 == '';

});
Route::get('loi',function(){
return redirect()->away('https://www.fb.com');
});

Route::get('home', function () {
    return view('home');
});
Route::get('session', function () {
    session()->put('KhoaHoc','Laravel');
    $data = session()->all();
    // dd($data);
});
Route::get('getss', function () {
    return view('session');
});
Route::get('deletess', function () {
   session()->flush();

});

Route::get('/taolsp',function (){
    Schema::create('loaisanpham', function ($table) {
        $table->increments('id',10);
        $table->string('ten',255);

    });
});
Route::get('themidlsp', function () {
    Schema::table('sanpham', function ( $table) {
        $table->integer('id_loaisanpham')->unsigned();
    });

});
Route::get('lienket',function(){
        // $data = App\Models\LoaiSanPham::find(2)->sanpham->toArray();
        $data = App\Models\LoaiSanPham::find(1)->sanphams->toArray();
        dd($data);
});

Route::get('login', function () {
  
    return view('dangnhap');
})->name('login')->middleware('guest');
Route::post('xl', [HocController::class , 'xl'])->name('login.auth');
 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
