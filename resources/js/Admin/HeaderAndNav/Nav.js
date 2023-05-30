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
    
});



