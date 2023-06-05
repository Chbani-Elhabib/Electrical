$(document).ready(function () {


    // click button add new user
    const add_btn = $('.add_btn button')
    add_btn.click( function(){
        $(this).parent().next().slideToggle(500)
    });

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


    // table 
    $("#example").DataTable({
        ordering: false,
    });


    // click show user 
    const showdata = $('.show-data')
    $("#example").on('click' , '.show' , function(){
        $.ajax({
            url: "/admin/person/show",
            type: "POST",
            data: {
                id: $(this).attr('data') ,
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            success: response => {
                if( response != 'no' ){
                    var html = '<div class="card-content">';

                    html += '<div class="usinfo mt-4 ms-3"><p class="mb-2">User information :</p></div>';
                    
                    html += '<div class="information d-flex justify-content-between mt-2 mb-2"><p class="mb-0">personal information</p><ion-icon name="chevron-down-outline"></ion-icon></div>';

                    html += '<div class="information-user mt-2">';
                    html += '<div class="d-flex"><p class="mb-2" >UserName :</p><p class="mb-2 ms-2">'+ response.UserName  +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >FullName:</p><p class="mb-2 ms-2">'+ response.FullName +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >Telf :</p><p class="mb-2 ms-2">'+ response.Telf  +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >Country :</p><p class="mb-2 ms-2">'+ response.Country  +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >Regions :</p><p class="mb-2 ms-2">'+ response.Regions  +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >city :</p><p class="mb-2 ms-2">'+ response.city  +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >Address :</p><p class="mb-2 ms-2" style="width: 85%">'+ response.Address  +'</p></div>';
                    html += '</div>';
                    html += '</div>';
                    showdata.html(html);
                    showdata.fadeIn(500);
                }
            }
        });
    });

    showdata.on( 'click', ".information", function(){
        $(this).next().slideToggle(500);
        $(this).children().eq(1).toggleClass('active')
    })

    showdata.click( function(e){
        if(e.target.classList.contains('show-data')){
            $(this).fadeOut(500);
        }
    })

    // click button delete user
    $("#example").on('click' , '.delete' , function(){
        $.ajax({
            url: "/admin/person/delete",
            type: "POST",
            data: {
                id: $(this).prev().prev().attr('data') ,
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            success: response => {
                if( response == 1 ){
                    $(this).parent().parent().parent().animate({  opacity: 0, height: 0 }, 500 )
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
                        icon: "success",
                        title: "Then successfully",
                    });
                    setTimeout(() => {
                        $(this).parent().parent().parent().remove();
                    }, "600");
                }
            }
        });
    });
});