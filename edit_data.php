<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama 		= $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga 		= $_POST['harga'];
$jumlah 	= $_POST['jumlah'];

$sql = $koneksi->query("UPDATE produk SET nama_produk = '$nama', keterangan = '$keterangan', harga = '$harga', jumlah = '$jumlah' WHERE id = '$id'");

if ($sql > 0) {
		//jika berhasil
	echo "<script>
			alert('Data berhasil di update');
			document.location.href='index.php';
		</script>";
}else{
	//jika gagal
	echo "<script>
			alert('Data gagal di update');
			document.location.href='edit.php';
		</script>";
	}


 ?>