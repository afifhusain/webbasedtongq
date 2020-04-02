<!DOCTYPE html>
<html>
@extends ('template')
@section ('title', 'Halaman Index Pegawai')

@section ('intro-header')


<head>
	
</head>	


<body>

		<div class="container">
			<div class="card-body">
			

		</div>
	
	<br>
	<a href="{{ url('pegawai/tambah') }}" class="btn btn-primary">Tambahkan Pegawai Baru</a>

	<br>
	<br>

	<table class="table table-bordered table-striped">
		<tr>
			<?php 
				$i = 1;
			 ?>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
			
		
		</tr>
		@foreach($pegawai as $d)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->alamat }}</td>
			
			<td>
				<a class="btn btn-warning" href="{{ url(('pegawai/edit')) }}/{{ $d->id }}">Edit</a>
				<a class="btn btn-danger" href="{{ url('pegawai/hapus') }}/{{ $d->id }}" onclick="return confirm('Are You Sure')">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
	<br>
	Page : {{ $pegawai->currentPage() }} <br>
	Summary pegawai : {{ $pegawai->total() }}<br>
	pegawai per Page : {{ $pegawai->perPage() }} <br>
	<br>
	{{ $pegawai->links() }}
	
</body>
	</div>


@endsection

@section ('home')



</html>
@endsection

