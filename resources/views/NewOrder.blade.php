@extends('Html.Html')
@extends('HeaderAndFouter.Header')
@extends('HeaderAndFouter.Fouter')


@section('content')
    <section>
		<form action="{{ url('/users/update') }}" method="POST" enctype="multipart/form-data">

			@csrf

			<div>
				<label for="Name" class="form-label mb-0">Name :</label>
				<input type="text" class="form-control inpute" id="Name" name='Name'>
				<div class='text-danger'></div>
			</div>
            
			<div>
				<label for="Telf" class="form-label mb-0">Phon :</label>
				<input type="text" class="form-control inpute" id="Telf" name='Telf'>
                <div class='text-danger'></div>
			</div>

			<div>
				<label for="Country" class="form-label mb-0">Country :</label>
				<select class="form-select" id="Country"  aria-label="Default select example">
					<option value='Morroco' selected>Morroco</option>
				</select>
			</div>

            <div>
				<label for="Regions" class="form-label labels mb-0">Regions :</label>
				<select class="form-select form-select" id="Regions">
                    <option selected disabled></option>
                    <option value="Souss-Massa">Souss-Massa</option>
                </select>
			</div>


			<div>
				<label for="exampleInputEmail1" class="form-label mb-0">city :</label>
				<select class="form-select form-select inpute" name='city' ></select>
				<div class="form-text text-danger"></div>
			</div>

            <div>
				<label for="Address" class="form-label mb-0">Address :</label>
				<textarea class="form-control inpute" name='Address' id="Address"></textarea>
			</div>


			<div class="mb-1">
				<button type="submite" class="btn btn-success float-end me-4 Update" >New Order</button>
			</div>

		</form>
	</section>
@endsection