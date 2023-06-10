@extends('Html.Html')
@extends('HeaderAndFouter.Header')
@section('title' , 'Profile')


@section('css')
@vite(['resources/css/Profile.css'])
@endsection


@section('content')
    <section>

        <div class='Profile'>
            <div class="d-flex">
                <p class="mb-0 @if($Person->UserName == '' ) indefand @endif ">{{ __('Profile.UserName') }}</p>
                <p class="ms-3" >{{$Person->UserName}}</p>
            </div>

            <div class="d-flex">
                <p class="mb-0 @if($Person->FullName == '' ) indefand  @endif ">{{ __('Profile.FullName') }}</p>
                <p class="ms-3">{{$Person->FullName}}</p>
            </div>

            <div class="d-flex">
                <p class="mb-0 @if($Person->Telf == '' ) indefand @endif ">{{ __('Profile.Telf') }}</p>
                <p class="ms-3" >{{$Person->Telf}}</p>
            </div>

            <div class="d-flex">
                <p class="mb-0 @if($Person->Country == '' ) indefand @endif ">{{ __('Profile.Country') }}</p>
                <p class="ms-3" >{{$Person->Country}}</p>
            </div>

            <div class="d-flex">
                <p class="mb-0 @if($Person->Regions == '' ) indefand @endif ">{{ __('Profile.Regions') }}</p>
                <p class="ms-3" >{{$Person->Regions}}</p>
            </div>

            <div class="d-flex">
                <p class="mb-0 @if($Person->city == '' ) indefand @endif ">{{ __('Profile.city') }}</p>
                <p class="ms-3" >{{$Person->city}}</p>
            </div>

            
            <div class="d-flex">
                <p class="mb-0 @if($Person->Address == '' ) indefand @endif ">{{ __('Profile.Address') }}</p>
                <p class="ms-3" >{{$Person->Address}} </p>
            </div>
            
        </div>

    </section>
@endsection 