<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data Bunga</title>
  </head>

  <body>
      <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA BUNGA
            </div>
            <div class="card-body">
              <form action="simpan-bunga.php" method="POST">

<div class="form-group">
     <label>Nama Bunga</label>
     <input type="text" name="nama_bunga" placeholder="Masukkan Nama Bunga" class="form-control">
</div>

<div class="form-group">
     <label>Warna Bunga</label>
     <input type="text" name="warna" placeholder="Masukkan Nama Bunga" class="form-control">
</div>

<div class="form-group">
     <label>Harga Beli</label>
     <input type="number" name="harga_beli" placeholder="Masukkan Harga Beli Bunga" class="form-control">
</div>

<div class="form-group">
     <label>Stok</label>
     <input type="number" name="stok" placeholder="Masukkan Stok Bunga" class="form-control">
</div>

<div class="form-group">
     <label>Gambar</label>
     <input type="file" name="gambar" placeholder="Masukkan Gambar Bunga" class="form-control">
</div>

 <button type="submit" class="btn btn-success">SIMPAN</button>
 <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
