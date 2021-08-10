//smoth scroll 
$('.navbar-collapse li a').click(function(){
    $('html , body').animate({
    
        scrollTop: $('#' + $(this).data('value')).offset().top-73
    
    }, 1000);
    });
    //scroll nav bar
    $(window).scroll(function(){
    
    $('nav').toggleClass("sticky", $(this).scrollTop() > 0);   
    });