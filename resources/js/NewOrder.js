$(document).ready(function(){


    const signinde = $('.signinde');
    const sign = $('.sign');
    
    signinde.click( e => {
        if($('html').attr('lang') == 'ar'){
            $('.abcRioButtonContentWrapper').children().eq(1).children().eq(0).text(' تسجيل الدخول');
        }
        sign.fadeIn(500);
    })

    const inpute = $('.inpute');


    inpute.eq(1).keyup(function(e){
		if (/\D/g.test(this.value)){
			this.value = this.value.replace(/\D/g, '');
		}
	});


    inpute.eq(4).click( function(e){
        e.preventDefault();


        if( inpute.eq(1).val().length <= 0 ){
            inpute.eq(1).css("border", "0.5px solid rgb(220 53 69 / 89%)")
            inpute.eq(1).prev().css("color", "#dc3545");
            inpute.eq(1).next().text("This is a username then entered before");

        }else{
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
                $('#xform').submit()
            }, 1500)
        }




    })

});