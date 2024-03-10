<?php
      include "header.php";
         ?>
    <div class="container">
      <div class="row">
          <div class="col-lg-12 mt-2" style="min-height :500px;">
          <div class="card">
      <div class="card-header">
           Data Pengadaan Buku
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <a href="" class="btn" style="background-color:#bbe4e9">Pengadaan Buku</a>
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
                  <th style="text-align:center">Id Pengadaan</th>
                  <th style="text-align:center">Tgl Pengadaan</th>
                  <th style="text-align:center">Id Buku</th>
                  <th style="text-align:center">Asal Buku</th>
                 <th style="text-align:center">Jumlah</th>
                 <th style="text-align:center">Keterangan</th>
                 <th style="text-align:center">Id Admin</th>         
                </tr>
                <?php
                    if (isset($_GET['cari'])) {
                    $keyword=$_GET['keyword'];
                    $query=mysqli_query($koneksi,"select * from pengadaan where
                    id_pengadaan like '%$keyword%'");
                    }else{
                    $query=mysqli_query($koneksi,"select * from pengadaan");
                    }
                    $no=1;
                        while ($ambil_data=mysqli_fetch_array($query)) {
                        ?>
         <tr>
        <td><?php echo $no++ ?></td>
      <td><?php echo $ambil_data['id_pengadaan'];?></td>
      <td><?php echo $ambil_data['tgl_pengadaan'];?></td>   
      <td><?php echo $ambil_data['id_buku'];?></td>   
      <td><?php echo $ambil_data['asal_buku'];?></td>   
      <td><?php echo $ambil_data['jumlah'];?></td> 
      <td><?php echo $ambil_data['keterangan'];?></td>
      <td><?php echo $ambil_data['id_admin'];?></td
   </tr>
   <?php
             }
   ?>
    </div>
   </table>
    </div>
   </div>
      