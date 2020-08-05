<!DOCTYPE html>
<html>
<head>
	<title>Tutorial ke 4 di Malas Ngoding, Parsing data View dr Controller</title>
</head>
<body>
	<h1>Tutorial Laravel Passing Data</h1>
	<a href="www.malasngoding.com">Website Master</a>

	<br>

	<p>Nama : {{$nama}}</p>
	
	<p>Mata Kuliah : </p>
	<ul>
		@foreach($matkul as $m)

		<li>{{$m}}</li>

		@endforeach
	</ul>

</body>
</html>