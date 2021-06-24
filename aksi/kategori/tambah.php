<?php
include('../../koneksi.php');

$kategori = $_POST['kategori'];

if (isset($_POST['submit']))
{
$sql    = "INSERT INTO kategori SET kategori='$_POST[kategori]'";
$result = mysqli_query($link, $sql);

if (!$result) {
	echo "Gagal Insert ke database";
}
else
{
	header('Location:../../kategori.php');
}
}
else
{
	header('Location:../../kategori.php');
}

 ?>