

$(document).ready(
    function(){
                                $("#tp").change(
                                    function(){
                                        var iddiachi = $(this).find(':selected').data("data");
                                    
                                        $.ajax({
                                            //gửi dữ liệu đi
                                            url : '/xettuyen/public/api/quanhuyen/' + iddiachi,
                                            type:'GET',
                                         
                                            //nhận dữ liệu về 
                                            success:function(nhanve){
                                                $("#qh").empty();
                                                var str
                                                var obj = JSON.parse(nhanve);
                                                for (item of obj) {
                                                   str="<option value='"+item.name+"'   data-data2='"+item.maqh+"' > "+item.name+"</option>"
                                                $("#qh").append(str);
                                                  }
                                            }
                                        }
                                        );

                                    }
                                );

                                $("#qh").change(
                                    function(){
                                        var iddiachi = $(this).find(':selected').data("data2");
                                    
                                        $.ajax({

                                            url : '/xettuyen/public/api/phuongxa/' + iddiachi,
                                            type:'GET',
                                         
                                            //nhận dữ liệu về 
                                            success:function(nhanve){
                                                $("#px").empty();
                                                var str
                                                var obj = JSON.parse(nhanve);
                                                for (item of obj) {
                                                   str="<option value='"+item.name+"'  > "+item.name+"</option>"
                                                    $("#px").append(str);
                                                  }
                                            }
                                        }
                                        );

                                    }
                                );

            
                                $("#tp2").change(
                                    function(){
                                        var iddiachi = $(this).find(':selected').data("data3");
                                    
                                        $.ajax({
            
                                            //gửi dữ liệu đi
                                            url : '/xettuyen/public/api/quanhuyen/' + iddiachi,
                                            type:'GET',
                                         
                                            //nhận dữ liệu về 
                                            success:function(nhanve){
                                                $("#qh2").empty();
                                                var str
                                                var obj = JSON.parse(nhanve);
                                                for (item of obj) {
                                                   str="<option value='"+item.name+"'   data-data4='"+item.maqh+"' > "+item.name+"</option>"
                                                $("#qh2").append(str);
                                                  }
                                            }
                                        }
                                        );
            
                                    }
                                );
            
                                $("#qh2").change(
                                    function(){
                                        var iddiachi = $(this).find(':selected').data("data4");
                                    
                                        $.ajax({
            
                                            url : '/xettuyen/public/api/phuongxa/' + iddiachi,
                                            type:'GET',
                                         
                                            //nhận dữ liệu về 
                                            success:function(nhanve){
                                                $("#px2").empty();
                                                var str
                                                var obj = JSON.parse(nhanve);
                                                for (item of obj) {
                                                   str="<option value='"+item.name+"'  > "+item.name+"</option>"
                                                    $("#px2").append(str);
                                                  }
                                            }
                                        }
                                        );
            
                                    }
                                );

                                $("#chonbieudo").change(function(){
                                    var bieudo = $(this).val();

                                    // var bd = document.getElementById("bieudo");
                                    $("#bieudo").empty();
                                    var a= "<h2>Phổ Điểm Môm "+bieudo+"</h2><img  src=http://localhost/web/controllers/"+bieudo+".php alt=''>"
                                    $("#bieudo").append(a);


                                    console.log(bieudo);
                                   
                                  

                                })
    }
);
// $(document).ready(function(){
//     $("#sel_depart").change(function(){
//     var deptid = $(this).val();
//     $.ajax({
//     url: 'getUsers.php',
//     type: 'post',
//     data: {depart:deptid},
//     dataType: 'json',
//     success:function(response){
//     var len = response.length;
//     $("#sel_user").empty();
//     for( var i = 0; i<len; i++){
//     var id = response[i]['id'];
//     var name = response[i]['name'];
//     $("#sel_user").append("<option value='"+id+"'>"+name+"

//     </option>");
//     }
//     }
//     });
//     });
//     });






