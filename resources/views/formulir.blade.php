<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Formulir</title>
</head>
<body>
	<form action="/formulir/proses" method="post">
		<input type="hidden" name="_token" value="<?php echo csrf_token()?>">

		Nama:
		<input type="text" name="nama"><br/>

		Alamat :
		<input type="text" name="nama"><br/>
		<input type="submit" value="simpan">
	</form>

</body>
</html>