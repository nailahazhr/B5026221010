<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<input type = "hidden" name = "nrp" value = "5026221010">
      	Nama :
        <!-- "nama" akan dibaca dari function proses -> input('nama') -->
		<input type="text" name="nama"> <br/>
		Alamat :
        <!-- "alamat" akan dibaca dari function proses -> input('alamat') -->
		<input type="text" name="alamat"> <br/>
		<input type="submit" value="Simpan">
	</form>

</body>
</html>
