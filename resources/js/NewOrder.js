$(document).ready(function(){

    const inpute = $('.inpute');

    inpute.eq(4).click( function(e){
        e.preventDefault();



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
    })

});