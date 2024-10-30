<?php
include "../includes/header.php";
include "../includes/config.php";
?>

<div class="container mt-5">
    <h3 class="text-center">Menambah Data User</h3>
    <?php
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $nama = $_POST['namalengkap'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user(user_nama, user_password, user_namalengkap, user_email)
            VALUES('$username','$pass','$nama','$email')";

    $hasil = mysqli_query($config, $sql);

    if ($hasil) {
        echo "<div class='alert alert-success' role='alert'>Data berhasil ditambahkan</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Data gagal disimpan</div>";
    }
    ?>
    <br>
    <p class="text-center"><a href="halaman_user.php" class="btn btn-primary">Kembali ke halaman user</a></p>
</div>

<?php include "../includes/footer.php"; ?>