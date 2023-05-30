@extends('Admin/Html.Html')
@extends('Admin/HeaderAndNav.Nav')
@extends('Admin/HeaderAndNav.Header')
@section('customers' , 'active')


@section('css')
@vite(['resources/css/Admin/Users.css'])
@endsection

@section('js')
@vite(['resources/js/admin/Users.js'])
@endsection

@section('content')
    <section class="users">
        <div class="usersborder"> 
            <article>
                <div class="add_btn clearfix">
                    <button class="btn btn-success float-end">add Users</button>
                </div>
                <div class="add_form">
                    <form action="{{ url('/users/sign') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-1">
                            <div class="image-profile">
                                <img src="/imageUsers/users.png" alt="profile-user">
                                <i class="fa-regular fa-image"></i>
                                <input type="file" name="Photo" class="image_user">
                            </div>
                        </div>

                        <div class="mb-1">
                            <label class="label_add_user" for=""><span class="position-relative" >*</span>UserName :</label>
                            <input name='UserName' class="input_add_user form-control" type="text">
                            <p class="form-text text-danger mb-0"></p>
                        </div>


                        <div class="mb-1">
                            <label class="label_add_user" for=""><span class="position-relative">*</span>Password :</label>
                            <input name='Password' class="input_add_user form-control" type="Password">
                            <p class="form-text text-danger mb-0"></p>
                        </div>

                        <div class="mb-1">
                            <label class="label_add_user" for=""><span class="position-relative">*</span>Config-Password :</label>
                            <input  class="input_add_user form-control" type="Password">
                            <p class="form-text text-danger mb-0"></p>
                        </div>


                        <div class="mb-1">
                            <label class="label_add_user" for="">Telf :</label>
                                <input name='Telf' class="input_add_user form-control input_add_user" type="text">
                            <p></p>
                        </div>

                        <div class="mb-1">
                            <label class="label_add_user" for="">Full Name :</label>
                                <input name='FullName' class="input_add_user form-control input_add_user" type="text">
                            <p></p>
                        </div>

                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label labels mb-0"><span class="position-relative">*</span>Country :</label>
                            <select class="form-select form-control form-select inputevalue input_add_user" name='Country'>
                                <option value='Morroco'>Morroco</option>
                            </select>
                            <div class="form-text text-danger"></div>
                        </div>

                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label labels mb-0"><span class="position-relative">*</span>Regions :</label>
                            <select class="form-select form-select Regions input_add_user" name='Regions'>
                                <option selected disabled></option>
                                <option value="Souss-Massa">Souss-Massa</option>
                            </select>
                            <div class="form-text text-danger"></div>
                        </div>

                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label mb-0"><span class="position-relative">*</span>city :</label>
                            <select class="form-select form-select city input_add_user" name='city'></select>
                            <div class="form-text text-danger"></div>
                        </div>


                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label mb-0">Address :</label>
                            <textarea name="Address" class="form-control input_add_user" id="exampleFormControlTextarea1" rows="1" placeholder="Address"></textarea>                            
                            <div id="emailHelp" class="form-text"></div>
                        </div>

                        <div class="clearfix">
                            <button class="btn btn-success add-user float-end">Add User</button>
                        </div>
                        
                    </form>
                </div>
                
            </article>
        </div>
    </section>
@endsection