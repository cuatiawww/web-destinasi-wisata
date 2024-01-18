<script>console.log(window.location.href)</script>
<?php
require "koneksi.php";
$tempat_wisata = explode("?", $_SERVER["REQUEST_URI"]);
$tempat_wisata = urldecode($tempat_wisata[1]);

$isi_konten = mysqli_query(
    $koneksi,
    "SELECT * FROM destinasi WHERE tempat_wisata = '$tempat_wisata'"
);
$isi_konten = mysqli_fetch_assoc($isi_konten);
print_r(urldecode($isi_konten["isi_konten"]));

?>
