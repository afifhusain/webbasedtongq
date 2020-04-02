@extends ('template')
@section ('title', 'Edit Page')

@section ('intro-header')

	 	
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-md-12">
	 				<div class="card">
	 					<div class="card-body">
	 						<h3>Edit Data</h3>


	 						<a href="{{ url('crud') }}" class="btn btn-warning">Back To Index</a>
	 						<br><br>

	 						<!-- validasi error -->

	 						@if(count($errors) > 0)
	 						<div class="alert alert-danger">
	 							<ul>
	 								@foreach($errors->all() as $error)
	 									<li>{{ $error }}</li>
	 								@endforeach
	 							</ul>
	 						</div>
	 						@endif


	 		@foreach ($data as $d)

	 			<form action="{{ url('crud/update') }}" method="post">
	 				{{ csrf_field() }}

	 				<input type="hidden" name="id" value="{{ $d->id }}">

	 				<div class="form-group">
	 					<label>Name</label>
	 					<input type="text" class="form-control" name="nama" value="{{ $d->nama }}" required="required">
	 				</div>

	 				<div class="form-group">
	 					<label>Work</label>
	 					<input class="form-control" type="text" name="pekerjaan" value="{{ $d->pekerjaan }}" required="required">
	 				</div>

	 				<div class="form-group">
	 					<label>Age</label>
	 					<input class="form-control" type="text" name="umur" value="{{ $d->umur }}" required="required">
	 				</div>

	 				<div class="form-group">
	 					<label>Address</label>
	 					<textarea class="form-control" name="alamat" required="required">{{ $d->alamat }}</textarea>
	 				</div>

	 				<div class="form-group">
	 					<input type="submit" value="save" class="btn btn-primary">
	 				</div>


	 			</form>
	 		@endforeach




	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>


@endsection

@section ('home')



@endsection

