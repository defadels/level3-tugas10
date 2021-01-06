<?php 
include 'koneksi.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Tambah Data Produk</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
   <div class="col-md-8">
   
        <h1>Tambah Data Produk</h1>
        <hr>
          <form action="tambah_data.php" method="post">
              <div class="form-group">
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" class="form-control" placeholder="Masukkan nama produk" name="nama_produk">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" placeholder="Masukkan keterangan produk" name="keterangan">
                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" placeholder="Masukkan harga produk">
              </div>
              <div class="form-group col-md-6">
                <label>Jumlah</label>
                <input type="number" class="form-control" name="jumlah" placeholder="Masukkan jumlah stok">
              </div>
             </div> 
              <a href="index.php" class="btn btn-dark">Kembali</a>
              <input type="submit" name="simpan" class="btn btn-secondary" value="Simpan" >
              </div>   
              
            </form>
        </div>
    </div>
     
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>