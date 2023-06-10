@extends('Html.Html')
@extends('HeaderAndFouter.Header')
@section('title' , 'Edit Password')


@section('css')
@vite(['resources/css/EditPassword.css'])
@endsection

@section('js')
@vite(['resources/js/EditPassword.js'])
@endsection

@section('content')
    <section>
		<form action="{{ url('/user/update/password') }}" method="POST" >

			@csrf

			<div class="position-relative mb-2">
				<label for="UserName" class="form-label mb-0">{{ __('EditPassword.Password') }}</label>
				<input type="password" class="form-control inpute" >
				<img class="eye position-absolute" src="/image/close_eye.png" alt="eye">
				<div class="text-danger"></div>
			</div>

			<div class="mb-2">
				<label for="UserName" class="form-label mb-0">{{ __('EditPassword.Newpassword') }}</label>
				<input type="password" class="form-control inpute" name='password' >
				<div class="text-danger"></div>
			</div>

			<div class="mb-2">
				<label for="UserName" class="form-label mb-0">{{ __('EditPassword.Configpassword') }}</label>
				<input type="password" class="form-control inpute" >
				<div class="text-danger"></div>
			</div>

			<div class=" mt-2 clearfix">
				<button type="submite" class="btn btn-success float-end me-4 mt-2 Updatepassword" >{{ __('EditPassword.Updatepassword') }}</button>
			</div>

		</form>
	</section>
@endsection 