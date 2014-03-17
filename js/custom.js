//this portion doesn't work
$(function() {  
    var pull        = $('.nav-toggle');  
        menu        = $('nav ul');  
        menuHeight  = menu.height();  
  
    $(pull).on('click', function(e) {  
        e.preventDefault();  
        menu.slideToggle();  
        alert("testing!")
    });  
});  

$(window).resize(function(){  
    var w = $(window).width();  
    if(w > 320 && menu.is(':hidden')) {  
        menu.removeAttr('style');  
    }  
});
//this portion doesn't work


function scrollToAnchor(aid) {
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
};


$("#scroll2").click(function() {
    scrollToAnchor('traditional')
})

$("#scroll3").click(function() {
   scrollToAnchor('digital');
});

$(document).ready(function(){
    $('#gallery').least();
});