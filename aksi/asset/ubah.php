<?php
include('../../koneksi.php');

$id = $_POST['id'];
$status = $_POST['status'];


if (isset($_POST['submit']))
{
$sql    = "UPDATE asset SET status='$status' WHERE id='$id'";
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