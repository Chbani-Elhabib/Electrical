$(document).ready(function(){

    // start validation
    const validation_Username = /^[a-zA-Z]+[0-9]*[a-zA-Z]*$/;

    function vaditionForm( x ,y ){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })                      
        Toast.fire({
            icon: x,
            title: y 
        }) 
    }

    // sign up and sign in
    const headeractions = $('.header-actions a.btn.has-before');
    const sign = $('.sign');
    const sign_in = $('.sign .center form .signup_link a');
    const center = $('.center');

    headeractions.click( e => {
        if($('html').attr('lang') == 'ar'){
            $('.abcRioButtonContentWrapper').children().eq(1).children().eq(0).text(' تسجيل الدخول');
        }
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

    // logn up 
    const inputsign = $('.input-sign');
    const logup = $('.logup');
    logup.click( function(e){

        e.preventDefault();

        // valid username
        var xUserName = true ;
        if(inputsign[2].value.length == 0){
            xUserName = false;
            inputsign.eq(2).next().next().removeClass("span01valide");
            inputsign.eq(2).next().next().addClass("span01");
            inputsign.eq(2).next().removeClass("labelvalide");            
            inputsign.eq(2).next().addClass("label");
        }else if(!inputsign[2].value.match(validation_Username) || inputsign[2].value.length < 4){
            vaditionForm("error" , "example: username4452");
            xUserName = false;
            inputsign.eq(2).next().next().removeClass("span01valide");
            inputsign.eq(2).next().next().addClass("span01");
            inputsign.eq(2).next().removeClass("labelvalide");            
            inputsign.eq(2).next().addClass("label");
        }else {
            $.ajax({
                url: '/admin/validation/loginandup',
                type: "POST",
                data: {username: inputsign[2].value ,  _token: $('meta[name="csrf-token"]').attr('content')},
                success: function (response) {
                    if(response == "Yes"){
                        xUserName = false ;
                        vaditionForm("error" , "Please change your username again");
                        inputsign.eq(2).next().next().removeClass("span01valide");
                        inputsign.eq(2).next().next().addClass("span01");
                        inputsign.eq(2).next().removeClass("labelvalide");            
                        inputsign.eq(2).next().addClass("label");
                    }else{
                        xUserName = true ;
                        inputsign.eq(2).next().next().removeClass("span01");
                        inputsign.eq(2).next().next().addClass("span01valide");
                        inputsign.eq(2).next().removeClass("label");
                        inputsign.eq(2).next().addClass("labelvalide");            
                    }
                },
            });
        };
        

        // valid password
        var xPassword = true ;
        if(inputsign[3].value.length == 0){
            inputsign.eq(3).next().next().removeClass("span01valide");
            inputsign.eq(3).next().next().addClass("span01");
            inputsign.eq(3).next().removeClass("labelvalide");            
            inputsign.eq(3).next().addClass("label");
            xPassword = false;
        }else{
            inputsign.eq(3).next().next().removeClass("span01");
            inputsign.eq(3).next().next().addClass("span01valide");
            inputsign.eq(3).next().removeClass("label");
            inputsign.eq(3).next().addClass("labelvalide");            
            xPassword = true;
        };


        // valid Confirm password
        var xConfirmPassword
        if(inputsign[4].value.length == 0){
            inputsign.eq(4).next().next().removeClass("span01valide");
            inputsign.eq(4).next().next().addClass("span01");
            inputsign.eq(4).next().removeClass("labelvalide");            
            inputsign.eq(4).next().addClass("label");
            xConfirmPassword = false;
        }else if(inputsign[3].value.length != inputsign[4].value.length ){
            xConfirmPassword = false ;
            vaditionForm("error" , 'Password does not match the confirm password');
            inputsign.eq(4).next().next().removeClass("span01valide");
            inputsign.eq(4).next().next().addClass("span01");
            inputsign.eq(4).next().removeClass("labelvalide");            
            inputsign.eq(4).next().addClass("label");
        }else{
            inputsign.eq(4).next().next().removeClass("span01");
            inputsign.eq(4).next().next().addClass("span01valide");
            inputsign.eq(4).next().removeClass("label");
            inputsign.eq(4).next().addClass("labelvalide");            
            xConfirmPassword = true;
        };

        if( xUserName && xPassword && xConfirmPassword ){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })                      
            Toast.fire({
                icon: 'success',
                title: 'Then successfully'
            }) 
            setTimeout(() => {
                $('#logup').submit()
            }, 1500)
        }


    })


    // logn in 
    const signin = $('.signin');
    signin.click( function(e){
        e.preventDefault(e);

        // valid username
        var xUserName = true ;
        if(inputsign[0].value.length == 0){
            xUserName = false;
            inputsign.eq(0).next().next().removeClass("span01valide");
            inputsign.eq(0).next().next().addClass("span01");
            inputsign.eq(0).next().removeClass("labelvalide");            
            inputsign.eq(0).next().addClass("label");
        }

        // valid password
        var xPassword = true ;
        if(inputsign[1].value.length == 0){
            inputsign.eq(1).next().next().removeClass("span01valide");
            inputsign.eq(1).next().next().addClass("span01");
            inputsign.eq(1).next().removeClass("labelvalide");            
            inputsign.eq(1).next().addClass("label");
            xPassword = false;
        }

        if( xUserName && xPassword ){
            $.ajax({
                url: '/admin/validation/loginandup',
                type: "POST",
                data: { username: inputsign[0].value , password: inputsign[1].value ,  _token: $('meta[name="csrf-token"]').attr('content')},
                success: function (response) {
                    if(response == "No"){
                        vaditionForm("error" , "The username and password are incorrect");

                        inputsign.eq(0).next().next().removeClass("span01valide");
                        inputsign.eq(0).next().next().addClass("span01");
                        inputsign.eq(0).next().removeClass("labelvalide");            
                        inputsign.eq(0).next().addClass("label");

                        inputsign.eq(1).next().next().removeClass("span01valide");
                        inputsign.eq(1).next().next().addClass("span01");
                        inputsign.eq(1).next().removeClass("labelvalide");            
                        inputsign.eq(1).next().addClass("label");

                    }else{
                        vaditionForm("success" , 'welcome '+ inputsign[0].value ); 
                        
                        inputsign.eq(0).next().next().removeClass("span01");
                        inputsign.eq(0).next().next().addClass("span01valide");
                        inputsign.eq(0).next().removeClass("label");
                        inputsign.eq(0).next().addClass("labelvalide");            

                        inputsign.eq(1).next().next().removeClass("span01");
                        inputsign.eq(1).next().next().addClass("span01valide");
                        inputsign.eq(1).next().removeClass("label");
                        inputsign.eq(1).next().addClass("labelvalide");            

                        setTimeout((el) => {
                            $('#login').submit()
                        },1500)

                    }
                },
            });
        }

    })


    // click on the menu profile 
    const menuprofile = $('.menu-profile');
    const profileimage = $('.profile-image');
    profileimage.click( function(){
        menuprofile.fadeToggle(300);
    })

});