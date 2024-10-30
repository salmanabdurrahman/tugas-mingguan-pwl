<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['namalengkap'];
$email = $_POST['email'];

$sql = "UPDATE user
        SET user_password = '$pass',
            user_namalengkap = '$nama',
            user_email = '$email'
        WHERE user_nama = '$user'";

$hasil = mysqli_query($config, $sql);

if ($hasil) {
    echo '<div class="container mt-5">
            <div class="alert alert-success" role="alert">
                Data berhasil diubah
            </div>
          </div>';
} else {
    echo '<div class="container mt-5">
            <div class="alert alert-danger" role="alert">
                Data gagal diubah
            </div>
          </div>';
}
?>

<div class="container mt-3 text-center">
    <a href="halaman_user.php" class="btn btn-primary">Kembali ke halaman user</a>
</div>

<?php include "../includes/footer.php"; ?>