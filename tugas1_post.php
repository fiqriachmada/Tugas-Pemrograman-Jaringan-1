<!DOCTYPE html>
<html>

<head>
    <title>Parsing Data Menggunakan POST</title>
</head>

<body>
    <h1>Parsing Menggunakan POST</h1>
    <form action="tugas1_post1.php" method="POST">
        <!-- Membuat Form yang	akan dikirimkan ke file “tugas2_get.php dengan method POST” -->
        <label for="npm">Masukan Npm : </label>
        <!-- Membuat label untuk input npm -->
        <input type="text" name="npm" id="npm">
        <!-- Membuat Form Input untuk npm -->
        <br>
        <label for="nama">Masukan Nama : </label>
        <!-- Membuat label untuk			input nama -->
        <input type="text" name="nama" id="nama">
        <!-- Membuat Form Input			untuk nama -->
        <br>
        <button type="submit" name="submit">Kirim!</button>
        <!-- Membuat			Button untuk mengirim data  -->
    </form>
    <!-- Akhir dari Baris From -->
</body>

</html>