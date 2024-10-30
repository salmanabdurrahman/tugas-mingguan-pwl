<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";

$id_beritanya = $_GET['berita_id'];
$sql = "DELETE FROM berita WHERE berita_id = '$id_beritanya'";
$hasil = mysqli_query($config, $sql);
?>

<div class="container mt-5">
    <?php if ($hasil): ?>
        <div class="alert alert-success" role="alert">
            Data Berhasil Dihapus
        </div>
    <?php else: ?>
        <div class="alert alert-danger" role="alert">
            Data Gagal Dihapus
        </div>
    <?php endif; ?>
    <div class="text-center mt-3">
        <a href="halaman_berita.php" class="btn btn-primary">Kembali</a>
    </div>
</div>

<?php include "../includes/footer.php"; ?>