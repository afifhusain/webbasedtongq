<!DOCTYPE html>
<html>
<head>
	<title>Testing Penggunaan Variabel</title>
</head>
<body>
	<h1>Tampil data Variabel</h1>
	<br><br>
	<p>Name : {{ $name }}</p>
	<br>
	<p>Hobi :</p>
	<ul>
		@foreach ($hobi as $h)
			<li>{{ $h }}</li>
		@endforeach
	</ul>

</body>
</html>