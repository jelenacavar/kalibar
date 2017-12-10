$(document).ready(function() {
    //Custom Js
    $('#mobile-nav').click(function(){
        $('#menu').toggleClass('active');
    });
    $('#menu a, .close-icon').click(function(){
        $('#menu').removeClass('active');
    });    
});