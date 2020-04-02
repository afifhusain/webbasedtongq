<!DOCTYPE html>
<html>
<head>
	<title>Relasi Tabel One To One</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('aset/vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>


	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				
				<h2 class="text-center my-4">Relasi One To One (2 Tabel)</h2>

				<table class="table table-bordered table-stripped">
					<thead>
						<tr>
							<th>Pengguna</th>
							<th>No. Telfon</th>
						</tr>
					</thead>

					<tbody>
						@foreach($pengguna as $p)

						<tr>
							<th>{{ $p->nama }}</th>
							<th>{{ $p->telepon->nomor_telepon }}</th>
						</tr>

						@endforeach
					</tbody>
					
				</table>

			</div>
		</div>
	</div>



</body>
</html>