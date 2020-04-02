<!DOCTYPE html>
<html>
<head>
	<title>Relasi Tabel Many To Many</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('aset/vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>


	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				
				<h2 class="text-center my-4">Relasi One To Many (2 Tabel)</h2>

				<table class="table table-bordered table-stripped">
					<thead>
						<tr>
							<th>Nama Siswa</th>
							<th>Hobi</th>
							<th>Jumlah</th>
						</tr>
					</thead>

					<tbody>
						@foreach($siswa as $s)

						<tr>
							<td>{{ $s->nama }}</td>
							<td>
								<ul>
								@foreach($s->hobi as $h)
									{{ $h->nama_hobi }}
								@endforeach
								</ul>
							</td>

							<td class="text-center">{{ $s->hobi->count() }}</td>
						</tr>

						@endforeach
					</tbody>
					
				</table>

			</div>
		</div>
	</div>



</body>
</htmlMany