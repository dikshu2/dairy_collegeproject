$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY >20){
        $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky"); 
        }
         // scroll-up button show/hide script
         if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });