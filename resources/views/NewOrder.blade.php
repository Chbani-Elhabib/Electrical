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
		<form id="xform" action="{{ url('/neworder') }}" method="POST" >

			@csrf

			<div style="height: 82px;">
				<label for="Name" class="form-label mb-0 ms-3"><span class="position-relative text-danger" >*</span>{{ __('NewOrder.Name') }} :</label>
				<input type="text" class="form-control inpute" id="Name" name='Name'>
				<div class='text-danger'></div>
			</div>

            
			<div style="height: 82px;">
				<label for="Telf" class="form-label mb-0 ms-3"><span class="position-relative text-danger" >*</span>{{ __('NewOrder.Phone') }} :</label>
				<input type="text" class="form-control inpute" id="Telf" name='Telf'>
                <div class='text-danger'></div>
			</div>

			<div style="height: 82px;">
				<label for="Country" class="form-label mb-0 ms-3"><span class="position-relative text-danger" >*</span>{{ __('NewOrder.Country') }} :</label>
				<select class="form-select" id="Country"  aria-label="Default select example">
					<option value='Morroco' selected>{{ __('NewOrder.Morroco') }}</option>
				</select>
			</div>

            <div style="height: 82px;">
				<label for="Regions" class="form-label labels mb-0 ms-3"><span class="position-relative text-danger" >*</span>{{ __('NewOrder.Regions') }} :</label>
				<select class="form-select form-select" id="Regions">
                    <option selected disabled></option>
                    <option value="Souss-Massa">{{ __('NewOrder.Souss') }}</option>
                </select>
			</div>


			<div style="height: 82px;">
				<label for="exampleInputEmail1" class="form-label mb-0 ms-3"><span class="position-relative text-danger" >*</span>{{ __('NewOrder.city') }} :</label>
				<select class="form-select form-select inpute" name='city' >
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

            <div style="height: 82px;">
				<label for="Address" class="form-label mb-0 ms-3"><span class="position-relative text-danger" >*</span>{{ __('NewOrder.Address') }} :</label>
				<textarea class="form-control inpute" name='Address' rows="1" id="Address"></textarea>
			</div>


			<div style="margin-top:28px;">
				<button type="submit" class="btn btn-success float-end me-4 inpute" style="padding: 5px 12px;">{{ __('NewOrder.NewOrder') }}</button>
			</div>

		</form>
	</section>
@endsection