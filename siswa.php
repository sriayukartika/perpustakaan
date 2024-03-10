<?php
      include "header.php";
         ?>
    <div class="container">
      <div class="row">
          <div class="col-lg-12 mt-2" style="min-height :500px;">
          <div class="card">
      <div class="card-header">
         Data Mahasiswa PENUSA
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <a href="" class="btn" style="background-color:#bbe4e9">List Mahasiswa</a>
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
                  <th style="text-align:center">NISN</th>
                  <th style="text-align:center">Nama Siswa</th>
                  <th style="text-align:center">JKL</th>
                  <th style="text-align:center">Tempat Lahir</th>
                  <th style="text-align:center">Tanggal Lahir</th>
                  <th style="text-align:center">Alamat</th>
                  <th style="text-align:center">No HP</th>
          </tr>
          <?php
              if (isset($_GET['cari'])) {
              $keyword=$_GET['keyword'];
              $query=mysqli_query($koneksi,"select * from siswa where
              nama_siswa like '%$keyword%'");
            }else{
              $query=mysqli_query($koneksi,"select * from siswa");
            }
            $no=1;
                while ($ambil_data=mysqli_fetch_array($query)) {
                ?>
         <tr>
        <td><?php echo $no++ ?></td>
      <td><?php echo $ambil_data['nisn'];?></td>
      <td><?php echo $ambil_data['nama_siswa'];?></td>   
      <td><?php echo $ambil_data['jkel'];?></td>   
      <td><?php echo $ambil_data['tempat_lahir'];?></td>   
      <td><?php echo $ambil_data['tgl_lahir'];?></td>   
      <td><?php echo $ambil_data['alamat'];?></td>  
      <td><?php echo $ambil_data['no_hp'];?></td>    
      
   </tr>
   <?php
             }
   ?>
    </div>
   </table>
    </div>
   </div>
      