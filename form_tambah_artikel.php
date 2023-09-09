<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aksi_tambah_artikel.php" method="post">
        <label for="judul">Judul Artikel</label>
        <input type="text" name="judul" id="judul"><br>
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" id="penulis"><br>
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal"><br>
        <label for="teks">Teks</label>
        <input type="text" name="teks" id="teks"><br>
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" id="gambar"><br>
        <input type="submit" value="submit">
</body>
</html>