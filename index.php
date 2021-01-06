<?php include 'koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Data Produk</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
            <h1>Data Produk</h1>
            <hr>
            <a href="tambah.php" class="btn btn-secondary btn-lg">Tambah Data</a>
            <hr>
            <table class="table table-bordered">
              <thead>
                <tr class="table-secondary">
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Keterangan</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th colspan="2">Aksi</th>
                </tr>
              </thead>
              <?php 
              $no = 1;
              $sql = "SELECT * FROM produk ORDER BY nama_produk ASC";
              $result = $koneksi->query($sql);

              if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

               ?>
              <tbody>
                <tr>
                  <th scope="row"><?php echo $no++; ?></th>
                  <td><?php echo $row['nama_produk'];  ?></td>
                  <td><?php echo $row['keterangan']; ?></td>
                  <td><?php echo "Rp.".number_format($row['harga']); ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">Edit</a></td>
                  <td><a onclick="return confirm('Anda yakin?');" href="hapus.php?id=<?php echo $row['id'] ?>" class="btn btn-dark" >Hapus</a></td>
                </tr>
               
              </tbody>
              <?php 

                }
              }

               ?>
            </table>
            
    </div>
  </div>  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>