@extends ('template')
@section ('title', 'Edit Data Pegawai')

@section ('intro-header')

	 	
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-md-12">
	 				<div class="card">
	 					<div class="card-body">
	 						<h3>Edit Data Pegawai</h3>


	 						<a href="{{ url('pegawai') }}" class="btn btn-warning">Back To Index</a>
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



	 			<form action="{{ url('pegawai/update') }}/{{ $pegawai->id }}" method="post">
	 				{{ csrf_field() }}
	 				{{ method_field('PUT') }}

	 				<div class="form-group">
	 					<label>Nama</label>
	 					<input type="text" class="form-control" name="nama" value="{{ $pegawai->nama }}" placeholder="Input Nama">
	 				
	 				</div>

	 				<div class="form-group">
	 					<label>Alamat</label>
	 					<textarea class="form-control" name="alamat"  placeholder="Input Alamat">{{ $pegawai->alamat }}</textarea>
	 				
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

