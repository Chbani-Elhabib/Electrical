$(document).ready(function(){

    console.log('jjj')
    // sign up and sign in
    const headeractions = $('.header-actions');
    const sign = $('.sign');
    const sign_in = $('.header .sign .center form .signup_link a');
    const center = $('.center');

    headeractions.click( e => {
        sign.fadeIn(500);
    })

    sign_in.eq(0).click( e => {
        center.eq(0).css("display","none");
        center.eq(1).css("display","block");
    });

    sign_in.eq(1).click( e => {
        center.eq(1).css("display","none");
        center.eq(0).css("display","block");
    });

    sign.click( function(e){
        if(e.target.classList.contains('sign')){
            $(this).fadeOut(500);
        }
    })
    
});