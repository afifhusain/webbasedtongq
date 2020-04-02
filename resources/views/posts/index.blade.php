<!DOCTYPE html>
<html>
<head>
	<title>Relasi Tabel One To Many</title>
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
							<th>Judul Artikel</th>
							<th>Tag</th>
							<th>Jumlah</th>
						</tr>
					</thead>

					<tbody>
						@foreach($posts as $p)

						<tr>
							<td>{{ $p->judul }}</td>
							<td>
								@foreach($p->tags as $tag)
									{{ $tag->tag }}
								@endforeach
							</td>

							<td class="text-center">{{ $p->tags->count() }}</td>
						</tr>

						@endforeach
					</tbody>
					
				</table>

			</div>
		</div>
	</div>



</body>
</html>