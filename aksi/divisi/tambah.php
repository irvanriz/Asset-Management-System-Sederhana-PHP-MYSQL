<?php
include('../../koneksi.php');

$divisi = $_POST['divisi'];

if (isset($_POST['submit']))
{
$sql    = "INSERT INTO divisi SET divisi='$_POST[divisi]'";
$result = mysqli_query($link, $sql);

if (!$result) {
	echo "Gagal Insert ke database";
}
else
{
	header('Location:../../divisi.php');
}
}
else
{
	header('Location:../../divisi.php');
}

 ?>