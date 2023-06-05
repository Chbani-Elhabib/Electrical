$(document).ready(function () {

    
    // change imager user 
    const image_user = $('.image_user')
    image_user.change((e) => {
        var filesArr = Array.prototype.slice.call(e.target.files);
        filesArr.forEach((f) => {
            if (!f.type.match("image.*")) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener("mouseenter", Swal.stopTimer);
                        toast.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                });
                Toast.fire({
                    icon: "error",
                    title: "Please insert a photo",
                });
            } else {
                var storedFiles = [];
                storedFiles.push(f);
                var reader = new FileReader();
                reader.onload = function (e) {
                    image_user.prev().prev().attr("src", e.target.result);
                };
                reader.readAsDataURL(f);
            }
        });
    });

    // click button user 
    const adduser = $('.add-user')
    adduser.click( function(e){
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
            $('form').submit()
        }, 1500)


    });

    
})