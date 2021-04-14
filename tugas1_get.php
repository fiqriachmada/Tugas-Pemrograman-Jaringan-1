<!DOCTYPE html>
<html>

<head>
	<title>Parsing Data Menggunakan GET</title>
</head>

<body>
	<h1>Parsing Menggunakan GET</h1>
	<form action="tugas1_get1.php" method="GET">
		<!-- Membuat Form yang	akan dikirimkan ke file “tugas2_get.php dengan method GET” -->
		<label for="npm">Masukan Npm : </label>
		<!-- Membuat label untuk input npm -->
		<input type="text" name="npm" id="npm"> 
		<!-- Membuat Form Input untuk npm -->
		<br>
		<label for="nama">Masukan Nama : </label> 
		<!-- Membuat label untuk input nama -->
		<input type="text" name="nama" id="nama"> 
		<!-- Membuat Form Input untuk nama -->
		<br>
		<button type="submit" name="submit">Kirim!</button> 
		<!-- Membuat Button untuk mengirim data -->
	</form> 
	<!-- Akhir dari Baris From -->
</body>

</html>