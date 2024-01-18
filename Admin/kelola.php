<!DOCTYPE html>

<?php
include "koneksi.php";

$id = "";
$Tempat_wisata = "";
$Isi_konten = "";
$Maps = "";

if (isset($_GET["ubah"])) {
    $id = $_GET["ubah"];

    $query = "SELECT * FROM destinasi WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $Tempat_wisata = $result["tempat_wisata"];
    $Isi_konten = $result["isi_konten"];
    $Maps = $result["map_url"];
}
?>

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
    <title>Halaman Admin</title>
    <link rel="icon" type="image/png" href="../logo/favicon-32x32.png" sizes="32x32"/>
</head>
<body>
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <b>Tambah Data</b>
          </a>
        </div>
      </nav>
      <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $id; ?>" name="id";>
          <div class="mb-3 row">
            <label for="Tempat_wisata" class="col-sm-2 col-form-label">
                Tempat Wisata
            </label>
            <div class="col-sm-10">
              <input required type="text" name="tempat_wisata" class="form-control" id="Tempat_wisata" placeholder="ex: Pulau komodo" value="<?php echo $Tempat_wisata; ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="Isi_konten" class="col-sm-2 col-form-label">
                Isi Konten
            </label>
            <div class="col-sm-10">
            <textarea required class="form-control" name="isi_konten" id="Isi_konten" rows="3" placeholder="ex: Deskripsikan Tempat Wisata tersebut" ><?php echo $Isi_konten; ?></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="Gambar" class="col-sm-2 col-form-label">
                Gambar
            </label>
            <div class="col-sm-10">
                <input <?php if (!isset($_GET["ubah"])) {
                    echo "required";
                } ?> class="form-control" type="file" name="gambar" id="Gambar" accept="image/">
            </div>
          </div>
          <div class="mb-3 row">
        <label for="map_url" class="col-sm-2 col-form-label">
          Alamat
        </label>
        <div class="col-sm-10">
        <input required type="text" name="map_url" class="form-control" id="map_url" value="<?php echo $Maps; ?>">
        </div>
      </div>

            <div class="mb-3 row mt-4">
              <div class="col">
                <?php if (isset($_GET["ubah"])) { ?>
                  <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                      <i class="fa fa-floppy-o" aria-hidden="true"></i>
                      Simpan Perubahan
                  </button>
                <?php } else { ?>
                  <button type="submit" name="aksi" value="add" class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Tambah Data
                    </button>
                <?php } ?>
                <a href="index.php" type="button" class="btn btn-danger">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                      Batal
                </a>
              </div>
          </div>
        </form>
      </div>
</body>
</html>