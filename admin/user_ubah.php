<?php
include "../includes/header.php";
include "../includes/config.php";
session_start();

$user = $_GET['user_nama'];
$sql = "SELECT * FROM user WHERE user_nama='$user'";
$hasil = mysqli_query($config, $sql);
$data = mysqli_fetch_assoc($hasil);
?>

<div class="container mt-5">
    <h3 class="text-center">Ubah Data Username</h3>
    <form method="POST" action="user_edit_action.php">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" value="<?php echo $data['user_nama'] ?>" disabled>
            <input type="hidden" name="username" value="<?php echo $data['user_nama'] ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo $data['user_password'] ?>">
        </div>
        <div class="form-group">
            <label for="namalengkap">Nama Lengkap</label>
            <input type="text" class="form-control" name="namalengkap" value="<?php echo $data['user_namalengkap'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $data['user_email'] ?>">
        </div>
        <div class="text-center">
            <input type="submit" name="ubah" value="Simpan" class="btn btn-primary">
            <input type="reset" value="Batal" class="btn btn-secondary">
        </div>
    </form>
</div>

<?php include "../includes/footer.php"; ?>