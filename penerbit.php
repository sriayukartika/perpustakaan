<?php
      include "header.php";
         ?>
    <div class="container">
      <div class="row">
          <div class="col-lg-12 mt-2" style="min-height :500px;">
          <div class="card">
      <div class="card-header">
           DATA PENERBIT BUKU
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <a href="" class="btn" style="background-color:#bbe4e9">List Penerbit Buku</a>
     </div>
      <div class="col">
        <form class="form-inline float-right" method="GET">
          <input type="text" class="form-control" name="keyword">
          <input type="submit" class="btn" style="background-color:#bbe4e9" ml-2 name="cari" value="cari">
        </from>
     </div>
    </div>
          <div class="row mt-3">
            <div class="col">
              <table class="table table-bordered table-striped" style="background-color:#c8d9eb">
                <tr>
                  <th style="text-align:center">No</th>
                  <th style="text-align:center">Id Penerbit</th>
                  <th style="text-align:center">Nama Penerbit</th>
                  <th style="text-align:center">Kota Penerbit</th>
          </tr>
          <?php
              if (isset($_GET['cari'])) {
              $keyword=$_GET['keyword'];
              $query=mysqli_query($koneksi,"select * from penerbit where
              nama_penerbit like '%$keyword%'");
            }else{
              $query=mysqli_query($koneksi,"select * from penerbit");
            }
            $no=1;
                while ($ambil_data=mysqli_fetch_array($query)) {
                ?>
         <tr>
        <td><?php echo $no++ ?></td>
      <td><?php echo $ambil_data['id_penerbit'];?></td>
      <td><?php echo $ambil_data['nama_penerbit'];?></td>
      <td><?php echo $ambil_data['kota_penerbit'];?></td>
   
       
   </tr>
   <?php
             }
   ?>
    </div>
   </table>
    </div>
   </div>
    