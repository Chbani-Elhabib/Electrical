@extends('Admin/Html.Html')
@extends('Admin/HeaderAndNav.Nav')
@extends('Admin/HeaderAndNav.Header')
@section('title' , 'Profile')

@section('css')
@vite(['resources/css/Admin/Profile.css'])
@endsection



@section('content')
    <section>

        <div class='Profile'>
            <div class="d-flex">
                <p class="mb-0 @if($Person->UserName == '' ) indefand @endif ">UserName :</p>
                <p class="ms-3" >{{$Person->UserName}}</p>
            </div>

            <div class="d-flex">
                <p class="mb-0 @if($Person->FullName == '' ) indefand  @endif ">FullName :</p>
                <p class="ms-3">{{$Person->FullName}}</p>
            </div>

            <div class="d-flex">
                <p class="mb-0 @if($Person->Telf == '' ) indefand @endif ">Telf :</p>
                <p class="ms-3" >{{$Person->Telf}}</p>
            </div>

            <div class="d-flex">
                <p class="mb-0 @if($Person->Country == '' ) indefand @endif ">Country :</p>
                <p class="ms-3" >{{$Person->Country}}</p>
            </div>

            <div class="d-flex">
                <p class="mb-0 @if($Person->Regions == '' ) indefand @endif ">Regions :</p>
                <p class="ms-3" >{{$Person->Regions}}</p>
            </div>

            <div class="d-flex">
                <p class="mb-0 @if($Person->city == '' ) indefand @endif ">city :</p>
                <p class="ms-3" >{{$Person->city}}</p>
            </div>

            
            <div class="d-flex">
                <p class="mb-0 @if($Person->Address == '' ) indefand @endif ">Address :</p>
                <p class="" >{{$Person->Address}} </p>
            </div>
            
        </div>

    </section>
@endsection