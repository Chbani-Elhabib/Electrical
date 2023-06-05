$(document).ready(function(){

    // Menu Toggle
    let toggle = $(".toggle");
    let navigation = $(".navigation");
    let main = $(".main");

    toggle.click( function(){
        $(this).toggleClass("active");
        navigation.toggleClass("active");
        main.toggleClass("active");
    })
    
    let user = $(".user");
    let menu = $(".menu");


    user.click( function(){
        menu.fadeToggle(200);
    })

    
});



