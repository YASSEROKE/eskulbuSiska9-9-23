<?php
   require 'db.php';
   $judul =$_POST['judul'];
   $penulis =$_POST['penulis'];
   $tanggal =$_POST['tanggal'];
   $gambar =$_POST['gambar'];
   $tambah =tambahDataArtikel($judul, $penulis,$tanggal,$teks,$gambar);
   if($tambah){
    header('Location: data_artikel.php');
   }else{
    echo "Gagal menambahkan data artikel";
   }
   ?>
