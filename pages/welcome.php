<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";

if (isset($_SESSION["username"])) {
    echo "
    <div class='container mt-5'>
        <div class='row'>
            <div class='col-md-12 text-center'>
                <h2 class='display-4'>Control Panel</h2>
                <p class='lead'>Selamat Datang " . $_SESSION['username'] . ". Klik <a href='logout.php' class='btn btn-link'>disini</a> untuk logout.</p>
                <p class='mb-4'>Berikut ini adalah menu navigasi anda:</p>
                <div class='btn-group' role='group' aria-label='Navigasi'>
                    <a href='../admin/halaman_berita.php' class='btn btn-primary btn-lg'>Halaman Berita</a>
                    <a href='../admin/halaman_user.php' class='btn btn-secondary btn-lg'>Halaman User</a>
                </div>
            </div>
        </div>
    </div>";
} else {
    echo "
    <div class='container mt-5'>
        <div class='row'>
            <div class='col-md-12 text-center'>
                <h2 class='display-4'>Maaf...</h2>
                <p class='lead'>Anda tidak berhak mengakses halaman ini. Silahkan <a href='login.php' class='btn btn-info btn-lg'>Login</a> terlebih dahulu.</p>
            </div>
        </div>
    </div>";
}

include "../includes/footer.php";
