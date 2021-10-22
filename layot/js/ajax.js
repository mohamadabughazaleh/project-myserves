//add serves 
$(document).ready(function(){
  
    $('#add_main_select').change(function(){
        var main_select = $(this).val();
        if(main_select){
            $.ajax({
                url: "ajax.php",
                method: "GET",
                data : {main_selector: main_select},
                success : function(data){
                $('#add_sub_select').html(data);
                    }
                });

            

        }else{
            $('#add_sub_select').html('<option>اختر الفرع الرئيسي اولا</option>');
        }
    })
});
$(document).ready(function(){

    $("#conutry").keyup(function(){
        var query = $ (this).val();
        if(query !=""){
    
            $.ajax({
                url:"search.php",
                method:"POST",
                data:{query:query},
                success: function(data){
                    $('#countrylist').fadeIn();
                    $('#countrylist').html(data);
                }
            });
           
        }
        else{
            $('#countrylist').fadeOut();
            $('#countrylist').html("");
        }
        
    });
    $(document).on("click","li",function(){
        $("#conutry").val($(this).text());
        $("#countrylist").fadeOut();
        });
});
$(document).ready(function(){
    function load_comment(){
        $.ajax({
            type:"POST",
            url:"code.php",
            data:{
                'load_comment_data':true

            },
            success:function(response){
                $(".back-ground-comment-part-one").html("");
                console.log(response);
                $.each(response ,function (Key,value){
               
                $(".back-ground-comment-part-one").
                append(' <img class="imge-comment" src="../project-myserves/layot/img/pexels-anamul-rezwan-1216544 (1).jpg" alt=""><span class="commnt-span"> '+value +'</span><i class="far fa-clock icon-commint-details"></i><span class="span-commnt-data">منذ 6 أشهر و8 أيام</span>\
                <p class="commnt-text">خدمة احترافية جدا وتعامل راقي .</p>\
                <i class="fas fa-reply icon-commint-details-tow"></i><span class="replay-commnt">0ردود</span><small class="replay-feedback" style="margin-right:20px">رد على تعليق</small>\
                ');
            });
            }
        });
    }
    $(".btn-comment").click(function(e){

    e.preventDefault();

    var msg =$(".comment-texrarea").val();

    if($.trim(msg).length==0){

        error_msg="please type comment";
        $("#error_status").text(error_msg);
    
    }else{

        error_msg="";
        $("#error_status").text(error_msg);
    }
    if(error_msg!=""){
    return false;
    }
    else{
    var data={
        'msg':msg,
        'add_comnment':true,

    };
$.ajax({
type:"POST",
url:"code.php",
data:data,
datatType:"datatype",
success:function(response){
alert(response);
}
});
 }
});
});