<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstraps-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!--Font Awesome-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    
    <!-- Data Tables -->
    <link rel="stylesheet" href="text.css" href="datatables/datatables.css">
    <script type="text/javascript" src="datatables/datatables.js"></script>

    <title>Halaman Admin</title>
    <link rel="icon" type="image/png" href="../logo/favicon-32x32.png" sizes="32x32"/>
</head>

<script type="text/javascript">
        $(document).ready(function(){
          $('#dt').DataTable();
      });
</script>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="index.php">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Manage Konten</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Kelola</a>
        </li> -->
      </ul>
    </div>
    <button type="button" class="btn btn-secondary  btn-danger" ><a href="logout.php" style="color:white;text-decoration:none">Log Out</a></button>
  </div>
</nav>


<br> <div class="alert text-center">
        <h4 style="margin-bottom: 0px">SELAMAT DATANG DI HALAMAN <b>ADMIN</b></h4>
    </div>
  
    
    <div class="container">
    <div class="table-responsive">
    <br><br><h4>DATA KOTAK SARAN</h4>
            <table id="dt" class="table align-middle table-bordered table-hover stripe hover">
              <thead>
                <tr>
                 <th><center>No.</center></th>
                 <th><center>Nama</center></th>
                 <th><center>Email</center></th>
                 <th><center>Pesan</center></th>
                 <th><center>Aksi</center></th>
                </tr>
              </thead>
              </div>
              </div>

              <?php
              include "koneksi.php";
              $no = 1;
              $ambildata = mysqli_query($conn, "select * from kontak");
              while ($tampil = mysqli_fetch_array($ambildata)) {
                echo "
                <tr>
                <td>$no</td>
                <td>$tampil[Nama]</td>
                <td>$tampil[Email]</td>
                <td>$tampil[Pesan]</td>   
                <td><center><a href='?kode=$tampil[Nama]' class='btn btn-danger'>Hapus</a></center></td>
                </tr>";     
                
                $no++;
              }
              ?>
</table>

<?php
if(isset($_GET['kode'])){

mysqli_query($conn, "delete from kontak where Nama='$_GET[kode]'");

echo "Data Berhasil Dihapus";
echo "<meta http-equiv=refresh content=2;URL='dashboard.php'>";
}
?>


  </body>
</html>