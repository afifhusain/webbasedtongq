<!DOCTYPE html>
<html>
@extends ('template')
@section ('title', 'Halaman Index Crud')

@section ('intro-header')


<head>
	
</head>	


<body>

		<div class="container">
			<div class="card-body">
				<h1>Search Data</h1>
				<p>Find Member Data</p>
				<form action="{{ url('crud/search') }}" method="GET" class="form-inline">
					<input class="form-control" type="text" name="search" placeholder="Search Member" value="{{ old('search') }}">
					<input class="btn btn-primary ml-3" type="submit" value="Search">
				</form>

		</div>
	
	<br>
	<a href="{{ url('crud/add') }}" class="btn btn-primary">Add New Member</a>

	<br>
	<br>

	<table class="table table-bordered table-striped">
		<tr>
			<th>Name</th>
			<th>Pekerjaan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($data as $d)
		<tr>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->pekerjaan }}</td>
			<td>{{ $d->umur }}</td>
			<td>{{ $d->alamat }}</td> 
			<td>
				<a class="btn btn-warning" href="{{ url(('crud/edit')) }}/{{ $d->id }}">Edit</a>
				<a class="btn btn-danger" href="{{ url('crud/delete') }}/{{ $d->id }}" onclick="return confirm('Are You Sure')">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
	<br>
	Page : {{ $data->currentPage() }} <br>
	Summary Data : {{ $data->total() }}<br>
	Data per Page : {{ $data->perPage() }} <br>
	<br>
	{{ $data->links() }}
	
</body>
	</div>


@endsection

@section ('home')



</html>
@endsection

