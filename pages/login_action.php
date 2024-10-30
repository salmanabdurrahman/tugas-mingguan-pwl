<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";

$username = mysqli_real_escape_string($config, $_POST['txtUsername']);
$password = mysqli_real_escape_string($config, $_POST['txtPassword']);

$sql = "SELECT user_nama, user_password FROM user WHERE user_nama = '$username'";
$hasil = mysqli_query($config, $sql) or exit("Error query : <b>" . $sql . "</b>.");

if (mysqli_num_rows($hasil) > 0) {
    $data = mysqli_fetch_array($hasil);
    if ($password === $data['user_password']) {
        $_SESSION['username'] = $data['user_nama'];
        header('Location: welcome.php');
        exit();
    } else {
        echo "
        <div class='container mt-5'>
            <div class='alert alert-danger' role='alert'>
                Maaf, username atau password salah. <a href='login.php'>Klik disini</a> untuk kembali login.
            </div>
        </div>";
    }
} else {
    echo "
    <div class='container mt-5'>
        <div class='alert alert-danger' role='alert'>
            Maaf, username atau password salah. <a href='login.php'>Klik disini</a> untuk kembali login.
        </div>
    </div>";
}

include "../includes/footer.php";
