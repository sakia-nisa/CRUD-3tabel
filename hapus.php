<?php
include ("koneksi.php");


$id = $_GET['id_siswa'];
$sql = "DELETE FROM tb_jurusan WHERE id_jurusan='$id'";
$sql = "DELETE FROM tb_spp WHERE id_spp='$id'";
$sql = "DELETE FROM tb_siswa WHERE id_siswa='$id'";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:tabel.php?status=sukses');
} else {
    echo "gagal";
}
?>