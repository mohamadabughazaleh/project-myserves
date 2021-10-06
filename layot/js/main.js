
$('.navbar-collapse li a').click(function(){
    $('html , body').animate({
    
        scrollTop: $('#' + $(this).data('value')).offset().top-73
    
    }, 1000);
    });

    //scroll nav bar
    $(document).ready(function(){ 

    if (location.pathname == '/project-myserves/mainpage.php'){

    $(window).scroll(function(){
    $('.navbar-edit').toggleClass("sticky", $(this).scrollTop() > 0);   
    
     })
} else { 

        $('.navbar-edit').removeClass("back-color-nav");
        $('.navbar-edit').addClass("sticky");
        
       }
});

    //upload-add-serves

   function readUrl(input){
    var uploadimg = document.getElementById("imguploadserves");

       if(input.files){
           var reader = new FileReader();
           reader.readAsDataURL(input.files[0]);
           reader.onload=(download)=>{
            uploadimg.src = download.target.result;

           }
       }
   }
   //login
  function addclassnewaccount() {
      "use strict"
      var login_container = document.getElementById("login-container");

      login_container.classList.add("sign-up-mode");
  }

  function removeclassnewaccount() {
    "use strict"
    var login_container = document.getElementById("login-container");

    login_container.classList.remove("sign-up-mode");
}
/*test */
$(function() {
    $('.material-card > .mc-btn-action').click(function () {
        var card = $(this).parent('.material-card');
        var icon = $(this).children('i');
        icon.addClass('fa-spin-fast');

<<<<<<< HEAD
        if (card.hasClass('mc-active')) {
            card.removeClass('mc-active');

            window.setTimeout(function() {
                icon
                    .removeClass('fa-arrow-left')
                    .removeClass('fa-spin-fast')
                    .addClass('fa-bars');

            }, 800);
        } else {
            card.addClass('mc-active');

            window.setTimeout(function() {
                icon
                    .removeClass('fa-bars')
                    .removeClass('fa-spin-fast')
                    .addClass('fa-arrow-left');

            }, 800);
        }
    });
});
/*end test */
 
=======
/*details*/
$(document).ready(function(){
  
$(".imge-details-tow img").animate({top:'25%'},2800);
  
$(".h1-detals").animate({width:'170px'},1000).animate({width:'100%'},3000).animate({width:'170px'},2000);
  
$(".prg-dtails").fadeTo(5000,1);
  
$(".ul-details-tow-ico ul").show(3000);
  
$(".ul-details-tow-ico ul li i").animate({marginLeft:"5px"},5000);
  
$(".replay-commnt").click(function(){
  
$(".back-ground-comment-part-tow").slideToggle(1000);

})
  
$(".replay-feedback").click(function(){
  
$(".replay-comment-details").slideToggle(1000);

})
    
});
/*add-img-edit-profile-*/
function readUrledit(event){
    "use strict"
var uploadimge = document.getElementById("uplodeimgedit");
if(event.files){
var readers = new FileReader();
readers.readAsDataURL(event.files[0]);
readers.onload=(download)=>{
uploadimge.src = download.target.result;
}
}
};
/*add-img-edit-profile-click*/
function uptateimge(){
    "use strict"
var uptateimgeS=document.getElementById("uplode-img-edit");
uptateimgeS.click();
};


>>>>>>> eb759a7ee7b4fffcd64e8f2ec656b043d9906452
