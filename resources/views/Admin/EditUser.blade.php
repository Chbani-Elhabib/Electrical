@extends('Admin/Html.Html')
@extends('Admin/HeaderAndNav.Nav')
@extends('Admin/HeaderAndNav.Header')
@section('title' , 'Edit customer')


@section('css')
@vite(['resources/css/Admin/EditUser.css'])
@endsection

@section('js')
@vite(['resources/js/Admin/EditUser.js'])
@endsection

@section('content')
    <section>
            <article>
                <form action="/admin/person/{{$User->id_people}}/update" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <div class="image-profile">
                            <img src="/users-image/{{$User->Photo}}" alt="profile-user">
                            <ion-icon name="images-outline"></ion-icon>
                            <input type="file" name="Photo" class="image_user">
                        </div>
                    </div>

                    <div>
                        <label class="label_add_user" for="">UserName :</label>
                        <input name='UserName' class="input_add_user form-control" value="{{$User->UserName}}" type="text">
                        <p class="form-text text-danger mb-0"></p>
                    </div>

                    <div>
                        <label class="label_add_user" for="">Telf :</label>
                        <input name='Telf' class="input_add_user form-control input_add_user" value="{{$User->Telf}}" type="text">
                        <p class="form-text text-danger mb-0"></p>
                    </div>


                    <div>
                        <label class="label_add_user" for="">Password :</label>
                        <input name='Password' class="input_add_user form-control" type="Password">
                        <p class="form-text text-danger mb-0"></p>
                    </div>

                    <div>
                        <label class="label_add_user" for="">Config-Password :</label>
                        <input  class="input_add_user form-control" type="Password">
                        <p class="form-text text-danger mb-0"></p>
                    </div>


            

                    <div>
                        <label class="label_add_user" for="">Full Name :</label>
                            <input name='FullName' class="input_add_user form-control input_add_user" value="{{$User->FullName}}" type="text">
                        <p></p>
                    </div>

                    <div>
                        <label for="exampleInputEmail1" class="form-label labels mb-0">Country :</label>
                        <select class="form-select form-control form-select inputevalue input_add_user" name='Country'>
                            <option  disabled></option>
                            <option selected value='Morroco'>Morroco</option>
                        </select>
                        <div class="form-text text-danger"></div>
                    </div>

                    <div>
                        <label for="exampleInputEmail1" class="form-label labels mb-0">Regions :</label>
                        <select class="form-select form-select Regions input_add_user" name='Regions'>
                            <option  disabled></option>
                            <option selected value="Souss-Massa">Souss-Massa</option>
                        </select>
                        <div class="form-text text-danger"></div>
                    </div>

                    <div>
                        <label for="exampleInputEmail1" class="form-label mb-0">city :</label>
                        <select class="form-select form-select city input_add_user" name='city'>
                            <option selected disabled></option>
                            <option @if( $User->city == 'Agadir' ) selected @endif value="Agadir">{{ __('NewOrder.Agadir') }}</option>
                            <option @if( $User->city == 'Oulad Teima' ) selected @endif value="Oulad Teima">{{ __('NewOrder.Oulad') }}</option>
                            <option @if( $User->city == 'Tiznit' ) selected @endif value="Tiznit">{{ __('NewOrder.Tiznit') }}</option>
                            <option @if( $User->city == 'Temsia' ) selected @endif value="Temsia">{{ __('NewOrder.Temsia') }}</option>
                            <option @if( $User->city == 'Sidi Moussa Lhamri' ) selected @endif value="Sidi Moussa Lhamri">{{ __('NewOrder.Sidi') }}</option>
                            <option @if( $User->city == 'Ait Amira' ) selected @endif value="Ait Amira">{{ __('NewOrder.Ait') }}</option>
                            <option @if( $User->city == 'Taroudant' ) selected @endif value="Taroudant">{{ __('NewOrder.Taroudant') }}</option>
                            <option @if( $User->city == 'Sidi Boumoussa' ) selected @endif value="Sidi Boumoussa">{{ __('NewOrder.SidiBoumoussa') }}</option>
                            <option @if( $User->city == 'Sidi Bibi' ) selected @endif value="Sidi Bibi">{{ __('NewOrder.Bibi') }}</option>
                            <option @if( $User->city == 'Oulad Berhil' ) selected @endif value="Oulad Berhil">{{ __('NewOrder.Berhil') }}</option>
                        </select>
                        <div class="form-text text-danger"></div>
                    </div>


                    <div>
                        <label for="exampleInputEmail1" class="form-label mb-0">Address :</label>
                        <textarea name="Address" class="form-control input_add_user" id="exampleFormControlTextarea1" rows="1" placeholder="Address">{{$User->Address}}</textarea>                            
                        <div id="emailHelp" class="form-text"></div>
                    </div>

                    <div class="clearfix">
                        <button class="btn btn-success add-user float-end">Add User</button>
                        <a href="/admin/customers">
                            <button type='button' class="btn btn-danger float-end">Clean</button>
                        </a>
                    </div>
                    
                </form>
            </article>
    </section>
@endsection