@extends('layouts.app')
@section('title','Nguyễn Tiến Đạt')
@section('content')
    <h1>Trang của Nguyễn Tiến Đạt</h1>
    <h2><?php echo $khoahoc ?></h2>
    <h2>{{$khoahocc ?? 'không có khoá học'}}</h2>


    {{$khoahoc}}
    {!!$khoahoc!!}
@if( $khoahoc=='<i>ntd</i>' )
      <?php echo 'đây là :'.$khoahoc?>  
    {!!$khoahoc!!}

@elseif( $khoahoc=='<i>nth</i>' )
<?php echo 'đây không là là :'.$khoahoc?>  
@else
<?php echo 'đây không là gì cả :'.$khoahoc?>  
@endif
@endsection