<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="index.php">PERPUSTAKAAN-PENUSA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="login.php">LOGIN<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            DATA MASTER
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="buku.php">Buku</a>
            <a class="dropdown-item" href="penerbit.php">Penerbit</a>
            <a class="dropdown-item" href="data_kategori.php">Kategori</a>
            <a class="dropdown-item" href="siswa.php">Siswa</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              TRANSAKSI
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="peminjaman.php">Peminjaman</a>
              <a class="dropdown-item" href="pengadaan.php">Pengadaan</a>
              <a class="dropdown-item" href="kembali.php">Pengembalian</a>
            </div>
          </li>
      </ul>
    </div>
          </div>
        </nav>
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mt-2">
          <div class="jumbotron jumbotron-fluid" style="background-color:#bbe4e9;">
          <div class="container" >
            <h1 class="display-5">SELAMAT DATANG MAHASISWA STMIK PENUSA</h1>
            <p class="lead">Ini adalah perpustakaan berbasis digital dan semua mahasiswa bisa membaca nya</p>
        </div>
      </div>
      </div>
      </div>
       </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                      <h5 class="card-title">Peminjaman</h5>
                      <p class="card-text">jumlah transaksi peminjaman 5</p>
                      <a href="peminjaman.php" style="background-color:#bbe4e9">Peminjaman</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                      <h5 class="card-title">Pengembalian</h5>
                      <p class="card-text">Jumlah transaksi pemgembalian 2</p>
                      <a href="kembali.php" style="background-color:#bbe4e9">Pengembalian</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                      <h5 class="card-title">Data Buku</h5>
                      <p class="card-text">Jumlah buku yang tersedia 2 Buku</p>
                      <a href="buku.php"style="background-color:#bbe4e9">Data Buku</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card" style="width: 16rem;">
                    <div class="card-body">
                      <h5 class="card-title">Data Siswa</h5>
                      <p class="card-text">Jumlah siswa yang ada 3 siswa</p>
                      <a href="siswa.php" style="background-color:#bbe4e9">Data Siswa</a>
                    </div>
                  </div>
            </div> 
            </div>
            </div>
            </div>
    <!-- akhir content-->
    <!-- footer -->
            <footer class="mt-5 bg-dark p-2 text-center" style="color: white; font-weight: bold">
                <p>PERPUSTAKAAN-PENUSA</p>
            </footer>
    <!-- akhir footer -->
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>