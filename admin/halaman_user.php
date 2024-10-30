<?php
include "../includes/header.php";
include "../includes/config.php";
?>

<div class="container mt-5">
    <h3 class="text-center">Data User</h3>
    <p class="text-center">
        <a href="user_tambah.php" class="btn btn-primary">+ Tambah User</a>
    </p>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                <th>E-Mail</th>
                <th>Kelola</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT user_nama, user_password, user_namalengkap, user_email FROM user ORDER BY user_namalengkap";
            $hasil = mysqli_query($config, $sql);
            $no = 1;
            while ($data = mysqli_fetch_array($hasil)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['user_nama']; ?></td>
                    <td><?php echo $data['user_password']; ?></td>
                    <td><?php echo $data['user_namalengkap']; ?></td>
                    <td><?php echo $data['user_email']; ?></td>
                    <td class="text-center">
                        <a href="user_edit.php?user_nama=<?php echo $data['user_nama']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="user_hapus.php?user_nama=<?php echo $data['user_nama']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>

<?php include "../includes/footer.php"; ?>