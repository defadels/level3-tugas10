<?php 
include 'koneksi.php';

$nama 		= $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga 		= $_POST['harga'];
$jumlah 	= $_POST['jumlah'];

$sql = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) 
		VALUES('$nama','$keterangan','$harga','$jumlah')";

 mysqli_query($koneksi, $sql);

 header("location:index.php");

 ?>