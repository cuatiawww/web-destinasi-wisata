<?php
include "koneksi.php";

function tambah_data($data, $files)
{
    $Tempat_wisata = $data["tempat_wisata"];
    $Isi_konten = $data["isi_konten"];
    $Maps = $data["map_url"];

    $split = explode(".", $files["gambar"]["name"]);
    $ekstensi = $split[count($split) - 1];

    $namafile = uniqid('gambar_', true) . '.' . $ekstensi;
    $Gambar = $namafile;

    $dir = "../assets/";
    $tmpFile = $_FILES["gambar"]["tmp_name"];

    move_uploaded_file($tmpFile, "../assets/" . $namafile);

    $query = "INSERT INTO destinasi VALUES('', '$Tempat_wisata', '$Isi_konten', '$Maps', '$Gambar')";
    $sql = mysqli_query($GLOBALS["conn"], $query);

    return true;
}
function ubah_data($data, $files)
{
    $id = $data["id"];
    $Tempat_wisata = $data["tempat_wisata"];
    $Isi_konten = $data["isi_konten"];
    $Maps = $data["map_url"];

    $queryShow = "SELECT * FROM destinasi WHERE id = '$id';";
    $sqlShow = mysqli_query($GLOBALS["conn"], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    if ($files["gambar"]["name"] == "") {
        $Gambar = $result["Gambar"];
    } else {
        $split = explode(".", $files["gambar"]["name"]);
        $ekstensi = $split[count($split) - 1];

        // Generate
        $namafile = uniqid('gambar_', true) . '.' . $ekstensi;
        $Gambar = $namafile;

        unlink("../assets/" . $result["Gambar"]);
        move_uploaded_file($files["gambar"]["tmp_name"], "../assets/" . $namafile);
    }

    $query = "UPDATE destinasi SET id='$id', tempat_wisata='$Tempat_wisata', isi_konten='$Isi_konten', Gambar= '$Gambar', map_url= '$Maps' WHERE id='$id';";
    $sql = mysqli_query($GLOBALS["conn"], $query);

    return true;
}

function hapus_data($data)
{
    $id = $data["hapus"];

    $queryShow = "SELECT * FROM destinasi WHERE id = '$id';";
    $sqlShow = mysqli_query($GLOBALS["conn"], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("../assets/" . $result["Gambar"]);

    $query = "DELETE FROM destinasi WHERE id = '$id';";
    $sql = mysqli_query($GLOBALS["conn"], $query);

    return true;
}

?>

