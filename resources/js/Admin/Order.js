$(document).ready(function () {


    // click button add new user
    const Neworder = $('.Neworder')
    Neworder.click( function(){
        $(this).parent().next().slideToggle(500)
    });


    // show number phone 
    const inputevalue = $('.inputevalue')
    inputevalue.eq(0).change( function(){
        $.ajax({
            url: "/admin/person/shownumber",
            type: "POST",
            data: {
                id: $(this).val() ,
                _token: $('meta[name="csrf-token"]').attr("content"),
            },
            success: response => {
                if( response != 'no' ){
                    inputevalue.eq(1).val(response.Telf);
                }
            }
        });
    })


    // click button user 
    const addorder = $('.addorder')
    addorder.click( function(e){
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
            url: "/admin/order/show",
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
                    html += '<div class="d-flex"><p class="mb-2" >UserName :</p><p class="mb-2 ms-2">'+ response.person.UserName  +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >FullName:</p><p class="mb-2 ms-2">'+ response.person.FullName +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >Telf :</p><p class="mb-2 ms-2">'+ response.person.Telf  +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >Country :</p><p class="mb-2 ms-2">'+ response.person.Country  +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >Regions :</p><p class="mb-2 ms-2">'+ response.person.Regions  +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >city :</p><p class="mb-2 ms-2">'+ response.person.city  +'</p></div>';
                    html += '<div class="d-flex"><p class="mb-2" >Address :</p><p class="mb-2 ms-2" style="width: 85%">'+ response.person.Address  +'</p></div>';
                    html += '</div>';

                    html += '<div class="information d-flex justify-content-between mt-2 mb-2"><p class="mb-0">Order information</p><ion-icon name="chevron-down-outline"></ion-icon></div>';

                    html += '<div class="information-user mt-2">';
                    html += '<div class="d-flex"><p class="mb-2" >body :</p><p class="mb-2 ms-2">'+ response.body+'</p></div>';
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

    // click button delete order
    $("#example").on('click' , '.delete' , function(){
        $.ajax({
            url: "/admin/order/delete",
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