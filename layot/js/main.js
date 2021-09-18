//smoth scroll 
$('.navbar-collapse li a').click(function(){
    $('html , body').animate({
    
        scrollTop: $('#' + $(this).data('value')).offset().top-73
    
    }, 1000);
    });
    //scroll nav bar
    $(window).scroll(function(){
        
    $('.back-color-nav').toggleClass("sticky", $(this).scrollTop() > 0);   
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

 
 