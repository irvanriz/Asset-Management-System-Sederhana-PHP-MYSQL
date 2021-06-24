<?php
include('../../koneksi.php');

$id = $_POST['id'];
$nama_user = $_POST['nama_user'];
$id_divisi = $_POST['id_divisi'];
$nomor_asset = $_POST['nomor_asset'];


if (isset($_POST['submit']))
{
$sql    = "UPDATE asset SET nama_user='$nama_user',id_divisi='$id_divisi' WHERE id='$id'";

$result = mysqli_query($link, $sql);

$sql    = "INSERT INTO history SET nama_user='$_POST[nama_user]',id_divisi='$_POST[id_divisi]',nomor_asset='$_POST[nomor_asset]'";

$result = mysqli_query($link, $sql);


if (!$result) {
	echo "Gagal Insert ke database";
}
else
{
	header('Location:../../asset.php');
}
}
else
{
	header('Location:../../asset.php');
}

 ?>