<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";
session_destroy();

echo "
<div class='container mt-5'>
    <div class='alert alert-success' role='alert'>
        Anda telah keluar dari sistem.
    </div>
    <div class='text-center'>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
</div>";

header('refresh:3;url=login.php');
exit();
include '../includes/footer.php';
