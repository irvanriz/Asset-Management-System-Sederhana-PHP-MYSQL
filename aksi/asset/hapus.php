<?php
include('../../koneksi.php');

// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($link,"delete from kategori where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../kategori.php");
 ?>