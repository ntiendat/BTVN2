<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title','Home page')</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Dark-NavBar-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Dark-NavBar-2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Dark-NavBar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Pretty-Search-Form.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/smoothproducts.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="{{asset('assets/css/sua.css')}}">

</head>
<script>
function myFunction() {
        var ho                     = document.getElementById("ho").value;
        var ten                    = document.getElementById("ten").value;
        var CMND                   = document.getElementById("CMND").value;
        var SDT                    = document.getElementById("SDT").value;
        var email                  = document.getElementById("email").value;
        var thanhphothuongtru      = document.getElementById("thanhphothuongtru").value;
        var quanhuyenthuongtru     = document.getElementById("quanhuyenthuongtru").value;
        var phuongxathuongtru      = document.getElementById("phuongxathuongtru").value;
        var diachithuongtru        = document.getElementById("diachithuongtru").value;
        var matruonglop12          = document.getElementById("matruonglop12").value;
        var truong12               = document.getElementById("truong12").value;
        var matinhlop12            = document.getElementById("matinhlop12").value;
        if (truong12                 == null || 
            ho                       == null ||
            ten                      == null ||  
            CMND                     == null || 
            SDT                      == null || 
            email                    == null ||
            thanhphothuongtru        == null ||
            quanhuyenthuongtru       == null ||
            phuongxathuongtru        == null ||
            diachithuongtru          == null ||
            matruonglop12            == null || 
            matinhlop12              == null ||
            truong12                 == "" ||
            ho                       == "" ||
            ten                      == "" || 
            CMND                     == "" || 
            SDT                      == "" || 
            email                    == "" || 
            thanhphothuongtru        == "" || 
            quanhuyenthuongtru       == "" ||
            phuongxathuongtru        == "" || 
            diachithuongtru          == "" || 
            matruonglop12            == "" || 
            matinhlop12              == "" 
         ) 
         {
             
             alert("Chưa nhập đủ thông tin");
            return false;
        }
}
var nv = 1
        function themnguyenvong() {
            nv++;
            if(nv<=3){
                var html = $('#nguyenvong1').html();

                html.replace('nguyenvong1','nguyenvong'+nv);
            // alert(html);
                
                $("#nguyenvong").append("<div class='col-md-4'><p style=' line-height: 3;'> Nguyện Vọng "+ nv +" :</p></div><div class='col-md-4'><select class='input-group input-by-me' name='nguyenvong"+nv+"' id='cars'>"+html+"</select>  </div> <div class='col-md-4'></div>");
        }
        else{
            alert("Chỉ được tối đa 3 nguyện vọng");

        }
        }


</script>
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a href="../index.php"><img src="{{asset('assets/img/logo.png')}}"></a><button data-toggle="collapse" class="navbar-toggler"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"
                        style="padding: 0;height: 131px;margin-left: 30px;margin-top: -49px;margin-bottom: -149px;">
                        <form class="form-inline search-form">
                            <div class="input-group">
                               
                                <div class="input-group-append">



                              //da bi cat
                                   


                                </div>
                            </div>
                            
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
   <div class="container main-xethocba">
        
    @section('content')
        
    @show
















</div> </div>
<footer class="page-footer dark" style="background-color: rgb(0,19,115);">
        <div class="footer-copyright dark flex">
            <div class="col-md-8">
                <h6 style="color: #fff !important;
                margin-top: .5rem !important;">© 2020 TRƯỜNG ĐẠI HỌC THỦY LỢI</h6>
            </div>
            <div class="col-md-4 socialmedia">
                <a href="https://www.facebook.com/daihocthuyloi1959/?fref=ts" target="_blank"><img
                        src="http://www.tlu.edu.vn/Portals/_default/skins/tluvie/images/front/fb-icon.png"></a>
                <a href="https://www.youtube.com/user/daihocthuyloi" target="_blank"><img
                        src="http://www.tlu.edu.vn/Portals/_default/skins/tluvie/images/front/ytb-icon.png"></a>
                <a href="https://twitter.com/Daihocthuyloihn" target="_blank"><img
                        src="http://www.tlu.edu.vn/Portals/_default/skins/tluvie/images/front/twitter-icon.png"></a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5><img style="height: 200px; width: 350px;" alt="Image" src="{{ asset('assets/img/scenery/map.png') }}"></h5>
                </div>
                <div class="col-lg-4" style="margin-top: 30px;">
                    <span>TRƯỜNG ĐẠI HỌC THỦY LỢI <br>Địa chỉ: 175 Tây Sơn, Đống
                        Đa, Hà Nội <br>Điện thoại: (024) 38522201 - Fax: (024) 35633351<br>Email:&nbsp;<a
                            href="http://www.tlu.edu.vn/#"> <span
                                style="text-decoration: underline;">phonghcth@tlu.edu.vn</span></a>
                    </span>
                    <hr>
                    <span>PHÂN HIỆU ĐẠI HỌC THỦY LỢI <br> Địa chỉ 1: Số 2 Trường Sa, P.17,Q.Bình Thạnh, Tp.Hồ Chí Minh
                        <br> Điện thoại:(028) 38400532 - Fax:(028) 38400542 <br> Địa chỉ 2: Phường An Thạnh, TP Thuận
                        An, Tỉnh Bình Dương <br> Điện thoại: (065)3748620 - Fax:(065)3833489
                        <br>Email:cs2@tlu.edu.vn</span>
                </div>
                <div class="col-lg-4" style="margin-top: 30px;">
                    <span>TRƯỜNG ĐẠI HỌC THỦY LỢI <br>Địa chỉ: 175 Tây Sơn, Đống
                        Đa, Hà Nội <br>Điện thoại: (024) 38522201 - Fax: (024) 35633351<br>Email:&nbsp;<a
                            href="http://www.tlu.edu.vn/#"> <span
                                style="text-decoration: underline;">phonghcth@tlu.edu.vn</span></a>
                    </span>
                    <hr>
                    <span>VIỆN ĐÀO TẠO VÀ KHOA HỌC ỨNG DỤNG MIỀN TRUNG <br>Địa chỉ:Số 115 Trần Phú, Thành phố Phan Rang,
                        Tỉnh Ninh Thuận <br>Điện thoại: (0259)3823027, (0259)3823028
                        <br>Email:trungtamdh2@tlu.edu.vn</span>
                </div>
            </div>
        </div>
    </footer>

    
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('assets/js/smoothproducts.min.js') }}"></script>
  
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/js.js') }}"></script>

    {{-- <script src="assets/js/js.js"></script> --}}


</body>

</html>
