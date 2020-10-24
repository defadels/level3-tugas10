<?php 
include 'koneksi.php';

$id = $_GET['id'];

$sql = $koneksi->query("DELETE FROM produk WHERE id='$id'");

if ($sql) {
		//jika berhasil
	echo "<script>
			alert('Data berhasil di hapus');
			document.location.href='index.php';
		</script>";
}else{
	//jika gagal
	echo "<script>
			alert('Data gagal di hapus');
			document.location.href='index.php';
		</script>";
	}

 ?>