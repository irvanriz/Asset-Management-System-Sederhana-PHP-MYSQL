<?php
include('../../koneksi.php');

$id_kategori = $_POST['id_kategori'];
$nama_barang = $_POST['nama_barang'];
$serial_number = $_POST['serial_number'];
$nomor_asset = $_POST['nomor_asset'];
$nama_user = $_POST['nama_user'];
$id_divisi = $_POST['id_divisi'];
$status = $_POST['status'];

if (isset($_POST['submit']))
{
$sql    = "INSERT INTO asset SET id_kategori='$_POST[id_kategori]',nama_barang='$_POST[nama_barang]',serial_number='$_POST[serial_number]',nomor_asset='$_POST[nomor_asset]',nama_user='$_POST[nama_user]',id_divisi='$_POST[id_divisi]',status='$_POST[status]'";
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