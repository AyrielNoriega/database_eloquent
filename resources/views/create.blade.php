@extends('base')

@section('content')

<h3 class="mb-4">Crear usuario</h3>

	<form action="{{ route('store') }}" method="POST">
		@csrf
		<div class="mb-3">
			<label for="name" class="form-label">Nombre</label>
			<input type="text" name="name" class="form-control" id="name">
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" name="email" class="form-control" id="email">
		</div>
		<div class="mb-3">
			<label   class="form-label">Ciudad</label>
			<select name="city_id"  >
				<option selected>Seleccione ciudad  </option>

					@foreach ( $cities as $city )
						<option value="{{ $city->id }}">{{ $city->id }} - {{ $city->city }}</option>
					@endforeach

			</select>
		</div>
	
		<button type="submit" class="btn btn-primary">Crear</button>
	</form>
		
@endsection
    