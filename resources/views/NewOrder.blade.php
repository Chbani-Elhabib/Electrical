@extends('Html.Html')
@extends('HeaderAndFouter.Header')
@extends('HeaderAndFouter.Fouter')
@section('neworder' , 'active')

@section('css')
@vite(['resources/css/NewOrder.css'])
@endsection

@section('js')
@vite(['resources/js/NewOrder.js'])
@endsection

@section('content')
    <section>
		<form id="xform" action="{{ url('/user/order') }}" method="POST" >

			@csrf

			<div>
				<label for="Name" class="form-label mb-0 ms-3">{{ __('NewOrder.Name') }} :</label>
				<input type="text" class="form-control inpute" id="Name" value="@isset($Person->FullName) {{$Person->FullName}} @endif" name='Name'>
				<div class='text-danger'></div>
			</div>

            
			<div>
				<label for="Telf" class="form-label mb-0 ms-3"><span class="position-relative text-danger" >*</span>{{ __('NewOrder.Phone') }} :</label>
				<input type="text" class="form-control inpute" id="Telf" name='Telf' value="@isset($Person->Telf) {{$Person->Telf}} @endif">
                <div class='text-danger'></div>
			</div>


            <div>
				<label for="Address" class="form-label mb-0 ms-3">{{ __('NewOrder.Address') }} :</label>
				<textarea class="form-control inpute" name='Address' rows="3" id="Address">@isset($Person->Address) {{$Person->Address}} @endif</textarea>
				<div class='text-danger'></div>
			</div>

            <div>
				<label for="body" class="form-label mb-0 ms-3">{{ __('NewOrder.body') }} :</label>
				<textarea class="form-control inpute" name='body' rows="5" id="body"></textarea>
				<div class='text-danger'></div>
			</div>

			@isset($Person)
				<div class="clearfix">
					<button type="submit" class="btn btn-success float-end me-4 inpute  mt-2" style="padding: 5px 12px;">{{ __('NewOrder.NewOrder') }}</button>
				</div>
			@else
				<div class="clearfix">
					<button type="button" class="btn btn-success float-end me-4 mt-2 signinde " style="padding: 5px 12px;">{{ __('NewOrder.NewOrder') }}</button>
				</div>
			@endif

		</form>
	</section>
@endsection