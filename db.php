<?php
function conn(){
    $conn = mysqli_connect('localhost','root','','portofolio');
    return $conn;
    if(!$conn){
       echo "Koneksi Gagal";die;
    }
}
function tampilDataArtikel(){
    $sql = "SELECT * FROM artikel";
    $result = mysqli_query(conn(), $sql);
    $data = [];
    while($row = mysqli_fetch_array($result)){
        $data[] = $row;
    }
    return $data;

}
function tambahDataArtikel($judul, $penulis , $tanggal, $teks, $gambar){
    $sql="INSERT INTO artikel VALUES('','$judul','$penulis','$tanggal','$teks','$gambar')";
$result= mysqli_query(conn(),$sql);
return $result;
}
?>