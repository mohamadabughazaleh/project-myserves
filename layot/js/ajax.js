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
//////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////// SEARCH ////////////////////////////////////////////////////////////////
$(document).ready(function(){

    $("#conutry").keyup(function(){
        var query =$(this).val();
        if(query){
    
            $.ajax({
                url: "search.php",
                method: "GET",
                data:{query:query},
                success: function(data){
                    $("#countrylist").fadeIn();
                    $('#countrylist').html(data);
                }
            });
           
        }
        else{
            $("#countrylist").fadeOut();
            $('#countrylist').html("");
        }
        
    });
    $(document).on("click","li",function(){
        $("#conutry").val($(this).text());
        $("#countrylist").fadeOut();
        });
});
<<<<<<< HEAD
$(document).ready(function(){
    load_comment();
    function load_comment(){
=======

//////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////// COMMENT ////////////////////////////////////////////////

 $(document).ready(function(){
load_comment();
function load_comment(){
    $.ajax({
        type:"POST",
        url:"code.php",
        data:{
            'comment_load_data':true
        },
        success:function(response){
            $(".comment_line").html("");
            // console.log(response);
            $.each(response ,function (Key,value){
            // console.log(value.cmt['comment_id']);
            // console.log(value.cmt['comment']);
            $(".comment_line").
            append('<div class="back-ground-comment-part-one">\
            <img class="imge-comment" src="../project-myserves/layot/img/'+value.user['imgg']+'" alt=""><span class="commnt-span"> '+ value.user['name'] +' </span><i class="far fa-clock icon-commint-details"></i><span class="span-commnt-data">'+value.cmt['commented_on']+'</span>\
            <div class="commnt-text"> '+value.cmt['comment']+' </div>\
            <i class="fas fa-reply icon-commint-details-tow"></i><button class="replay-commnt" value="'+value.cmt['comment_id']+'">0ردود</button><button class="replay-feedback" value="'+value.cmt['comment_id']+'" style="margin-right:20px">رد على تعليق</button>\
            <div class="ml-4 replay_section"></div>\
          </div>');
        });
        }
    });
    
}



    $(document).on('click','.replay-feedback',function()
    {
        var thisClicked = $(this);
        var cmt_id = thisClicked;


        $('.replay_section').html("");
        thisClicked.closest('.back-ground-comment-part-one').find('.replay_section').
        html('<input type="text" class="reply_msg form-control my-2" placholder="reply">\
                <div class="text-end">\
                    <button class="btn btn-sm btn-primary reply_add_btn">reply</button>\
                    <button class="btn btn-sm btn-danger reply_cancel_btn">cancel</button>\
                </div>');

    });

    $(document).on('click','.reply_cancel_btn', function(){

        $('.replay_section').html("");

    });

    $(document).on('click','.reply_add_btn', function(e){

        e.preventDefault();

        var thisClicked = $(this);
        var cmt_id = thisClicked.parents('.back-ground-comment-part-one').find('.replay-feedback').val();
        var replay = thisClicked.closest('.back-ground-comment-part-one').find('.reply_msg').val();
        // console.log(cmt_id);
        // console.log(replay);
        
        var data = {
            'comt_id': cmt_id,
            'reply_msg':  replay,
            'reply_add_btn': true
        };
        $.ajax({
            type:"POST",
            url: "code.php",
            data: data,
            success :function (response){

                alert(response);
                $('.replay_section').html("");

            }
        });

    });

    $(document).on('click','.replay-commnt', function(e) {

        e.preventDefault();

        var thisClicked = $(this);
        var cmt_id = thisClicked.val();

>>>>>>> 6aae8bf4c70c756ed35d96c798d324544298ae67
        $.ajax({
            type:"POST",
            url:"code.php",
            data:{
<<<<<<< HEAD
                'comment_load_data':true

            },
            success:function(response){
                $(".comment_line").html("");
                console.log(response);
                $.each(response ,function (Key,value){
               
                $(".comment_line").
                append('<div class="back-ground-comment-part-one">\
                <img class="imge-comment" src="../project-myserves/layot/img/'+value.user['imgg']+'" alt=""><span class="commnt-span"> '+ value.user['name'] +' </span><i class="far fa-clock icon-commint-details"></i><span class="span-commnt-data">'+value.cmt['commented_on']+'</span>\
                <div class="commnt-text" id="display_comment"> '+value.cmt['comment']+' </div>\
                <i class="fas fa-reply icon-commint-details-tow"></i><span class="replay-commnt">0ردود</span><small class="replay-feedback" style="margin-right:20px">رد على تعليق</small>\
              </div>');
            });
=======
                'cmt_id': cmt_id,
                'view_comment_data': true
            },
            success:function(response){
                    // console.log(response);
                    $('.replay_section').html("");

                    $.each(response, function(key, value) {

                    thisClicked.closest('.back-ground-comment-part-one ').find('.replay_section').
                    append('<div class="back-ground-comment-part-one border-buttom">\
                    <input type="hidden" class="get_username" value="'+ value.user['name'] +'" />\
                    <img class="imge-comment" src="../project-myserves/layot/img/'+value.user['imgg']+'" alt=""><span class="commnt-span"> '+ value.user['name'] +' </span><i class="far fa-clock icon-commint-details"></i><span class="span-commnt-data">'+ value.cmt['commented_on'] +'</span>\
                    <div class="commnt-text"> '+ value.cmt['reply_msg'] +' </div>\
                    <i class="fas fa-reply icon-commint-details-tow"></i><button class="sub_replay-feedback" value="'+ value.cmt['comt_id'] +'" style="margin-right:20px">رد على تعليق</button>\
                    <div class="ml-4 sub_replay_section"></div>\
                    </div>\
                  ');
               });
>>>>>>> 6aae8bf4c70c756ed35d96c798d324544298ae67
            }
        });
    });

    $(document).on('click','.sub_replay-feedback',function(e){

        e.preventDefault();

        var thisClicked = $(this);
        var cmt_id = thisClicked.val();
        var username = thisClicked.closest('.back-ground-comment-part-one').find('.get_username').val();

        $('.sub_replay_section').html("");
        thisClicked.closest('.back-ground-comment-part-one').find('.sub_replay_section').
            append('<div>\
                        <input type="text" value="@'+username+' " class="sub_reply_msg form-control my-2" placeholder="ردك" />\
                    </div>\
                    <div class="text-end">\
                        <button class="btn btn-sm sub_replay-feedback_add_btn" value="" style="margin-right:20px">رد على تعليق</button>\
                        <button class="btn btn-sm sub_replay-feedback_cancel_btn" value="" style="margin-right:20px">ألغاء </button>\
                    </div>\
            ');

    });

    $(document).on('click','.sub_replay-feedback_add_btn',function(e){

        e.preventDefault();
        
        var thisClicked = $(this);
        var cmt_id = thisClicked.closest('.back-ground-comment-part-one').find('.sub_replay-feedback').val();
        var reply  = thisClicked.closest('.back-ground-comment-part-one').find('.sub_reply_msg').val();

        var data = {
            'cmt_id': cmt_id,
            'reply_msg':reply,
            'add_subreplies': true
        }

        $.ajax({

            type: "POST",
            url: "code.php",
            data:data,
            success: function (response) {

                $('.replay_section').html("");
                alert(response);
            }

        });

    });

    $(document).on('click','.sub_replay-feedback_cancel_btn',function(e){

        e.preventDefault();
        $('.sub_replay_section').html("");
    
    });


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////// ADD COMMENT ////////////////////////////////////////////////////////////////////

    $(".btn-comment").click(function(e){

    e.preventDefault();

    var msg =$(".comment-texrarea").val();

    if($.trim(msg).length==0){

        error_msg="please type comment";
        alert(error_msg);
     
    
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
<<<<<<< HEAD
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
})
=======
    $.ajax({

        type:"POST",
        url:"code.php",
        data:data,
        datatType:"datatype",
        success:function(response){ 
        alert(response);
        $('.comment-texrarea').val("");
        
        }
    });
   }
 });
});
>>>>>>> 6aae8bf4c70c756ed35d96c798d324544298ae67
