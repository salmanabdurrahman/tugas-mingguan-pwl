<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";

$judul = $_POST["judul"];
$isiberita = $_POST["isi"];
$tgl_upload = $_POST["tanggal"];
$usernama = $_POST["user_nama"];
$lokasifile = $_FILES['gambar']['tmp_name'];
$namafile = $_FILES['gambar']['name'];
$uploaddir = "upload/";
$uploadfile = $uploaddir . $namafile;
?>

<div class="container mt-5">
    <?php if (move_uploaded_file($lokasifile, $uploadfile)) {
        $sql = "INSERT INTO berita (berita_judul, berita_isi, berita_gambar, berita_tanggal, user_nama) 
                VALUES ('$judul', '$isiberita', '$uploadfile', '$tgl_upload', '$usernama')";
        $hasil = mysqli_query($config, $sql);
        header('location: halaman_berita.php');
    } else {
        echo "<div class='alert alert-danger'>File gagal disimpan</div>";
    } ?>
</div>

<?php include "../includes/footer.php"; ?>