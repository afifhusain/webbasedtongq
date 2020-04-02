@extends ('template')
@section ('title', 'Add Data Page')

@section ('intro-header')

	 	
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-md-12">
	 				<div class="card">
	 					<div class="card-body">
	 						<h3>Add Data</h3>


	 						<a href="{{ url('crud') }}" class="btn btn-warning">Back To Index</a>
	 						<br><br>

	 						<!-- validasi eror -->

	 						@if(count($errors) > 0)
	 						<div class="alert alert-danger">
	 							<ul>
	 								@foreach($errors->all() as $error)
	 									<li>{{ $error }}</li>
	 								@endforeach
	 							</ul>
	 						</div>
	 						@endif



	 			<form action="{{ url('crud/store') }}" method="post">
	 				{{ csrf_field() }}

	 				<div class="form-group">
	 					<label>Name</label>
	 					<input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
	 				</div>

	 				<div class="form-group">
	 					<label>Work</label>
	 					<input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}">
	 				</div>

	 				<div class="form-group">
	 					<label>Age</label>
	 					<input class="form-control" type="text" name="umur" value="{{ old('umur') }}">
	 				</div>

	 				<div class="form-group">
	 					<label>Address</label>
	 					<textarea class="form-control" name="alamat" value="{{ old('alamat') }}"></textarea>
	 				</div>

	 				<div class="form-group">
	 					<input type="submit" value="save" class="btn btn-primary">
	 				</div>


	 			</form>




	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>


@endsection

@section ('home')



@endsection

