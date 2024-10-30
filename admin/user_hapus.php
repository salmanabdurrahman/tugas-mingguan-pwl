<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";

$user = $_GET['user_nama'];
$sql = "DELETE FROM user WHERE user_nama = '$user'";
$hasil = mysqli_query($config, $sql);

if ($hasil) {
    echo "<div class='container mt-5'>
            <div class='alert alert-success' role='alert'>
                Data Berhasil Dihapus
            </div>
          </div>";
    header("Refresh:3; url=halaman_user.php");
} else {
    echo "<div class='container mt-5'>
            <div class='alert alert-danger' role='alert'>
                Data Gagal Dihapus
            </div>
          </div>";
    header("Refresh:3; url=halaman_user.php");
}

include "../includes/footer.php";
