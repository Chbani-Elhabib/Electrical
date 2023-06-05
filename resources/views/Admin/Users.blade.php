@extends('Admin/Html.Html')
@extends('Admin/HeaderAndNav.Nav')
@extends('Admin/HeaderAndNav.Header')
@section('customers' , 'active')
@section('title' , 'customers')


@section('css')
@vite(['resources/css/Admin/Users.css'])
@endsection

@section('js')
@vite(['resources/js/Admin/Users.js'])
@endsection

@section('content')
    <section class="users">
        <div class="usersborder"> 
            <article>
                <div class="add_btn clearfix">
                    <button class="btn btn-success float-end">add Users</button>
                </div>
                <div class="add_form">
                    <form action="{{ url('/admin/person/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-1">
                            <div class="image-profile">
                                <img src="/users-image/users.png" alt="profile-user">
                                <ion-icon name="images-outline"></ion-icon>
                                <input type="file" name="Photo" class="image_user">
                            </div>
                        </div>

                        <div class="mb-1">
                            <label class="label_add_user" for=""><span class="position-relative" >*</span>UserName :</label>
                            <input name='UserName' class="input_add_user form-control" type="text">
                            <p class="form-text text-danger mb-0"></p>
                        </div>

                        <div class="mb-1">
                            <label class="label_add_user" for="">Telf :</label>
                            <input name='Telf' class="input_add_user form-control input_add_user" type="text">
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
                            <label class="label_add_user" for="">Full Name :</label>
                                <input name='FullName' class="input_add_user form-control input_add_user" type="text">
                            <p></p>
                        </div>

                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label labels mb-0">Country :</label>
                            <select class="form-select form-control form-select inputevalue input_add_user" name='Country'>
                                <option value='Morroco'>Morroco</option>
                            </select>
                            <div class="form-text text-danger"></div>
                        </div>

                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label labels mb-0">Regions :</label>
                            <select class="form-select form-select Regions input_add_user" name='Regions'>
                                <option selected disabled></option>
                                <option value="Souss-Massa">Souss-Massa</option>
                            </select>
                            <div class="form-text text-danger"></div>
                        </div>

                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label mb-0">city :</label>
                            <select class="form-select form-select city input_add_user" name='city'>
                                <option selected disabled></option>
                                <option value="Agadir">{{ __('NewOrder.Agadir') }}</option>
                                <option value="Oulad Teima">{{ __('NewOrder.Oulad') }}</option>
                                <option value="Tiznit">{{ __('NewOrder.Tiznit') }}</option>
                                <option value="Temsia">{{ __('NewOrder.Temsia') }}</option>
                                <option value="Sidi Moussa Lhamri">{{ __('NewOrder.Sidi') }}</option>
                                <option value="Ait Amira">{{ __('NewOrder.Ait') }}</option>
                                <option value="Taroudant">{{ __('NewOrder.Taroudant') }}</option>
                                <option value="Sidi Boumoussa">{{ __('NewOrder.SidiBoumoussa') }}</option>
                                <option value="Sidi Bibi">{{ __('NewOrder.Bibi') }}</option>
                                <option value="	Oulad Berhil">{{ __('NewOrder.Berhil') }}</option>
                            </select>
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
                <div class="table_users">
                    @isset($users)
                        <table id='example' class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Users</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">...</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">
                                            <div class="usersin">
                                                <div>
                                                    <img src="/users-image/{{$user->Photo}}"  alt="profaile users">
                                                </div>
                                                <h5>{{$user->UserName}}</h5>
                                            </div>
                                        </th>
                                        <td><h5>@if( $user->Telf != '' ) {{$user->Telf}} @else Null @endif</h5></td>
                                        <td>
                                            <div>
                                                <a class="show" data='{{$user->id_people}}'>
                                                    <img src="/image/eye.png" alt="eye">
                                                </a>
                                                <a href="/admin/customer/{{$user->id_people}}/edit">
                                                    <img src="/image/update.png" alt="update">
                                                </a>
                                                <a class="delete">
                                                    <img src="/image/delete.png" alt="delete">
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endisset
                </div>
            </article>
        </div>
    </section>
@endsection