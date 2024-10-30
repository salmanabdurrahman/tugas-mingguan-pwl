<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";
?>

<div class="container mt-5">
    <p class="text-left">
        Anda Login Sebagai "<?php echo $_SESSION['username']; ?>" | Klik <a href="../pages/logout.php">disini</a> untuk logout.
    </p>
    <h3 class="text-left">Data Berita</h3>
    <p class="text-left">
        <a href="berita_tambah.php" class="btn btn-primary">+ Tambah Berita</a>
    </p>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Judul Berita</th>
                <th>Isi Berita</th>
                <th>Tanggal Upload</th>
                <th>Gambar</th>
                <th>Kelola</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT berita_id, berita_judul, berita_isi, berita_tanggal, berita_gambar FROM berita ORDER BY berita_id";
            $hasil = mysqli_query($config, $sql);
            $no = 1;
            while ($data = mysqli_fetch_array($hasil)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['berita_judul']; ?></td>
                    <td><?php echo $data['berita_isi']; ?></td>
                    <td><?php echo $data['berita_tanggal']; ?></td>
                    <td><img src="upload/<?php echo $data['berita_gambar']; ?>" class="img-fluid"></td>
                    <td class="text-center">
                        <a href="berita_ubah.php?berita_id=<?php echo $data['berita_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="berita_hapus.php?berita_id=<?php echo $data['berita_id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
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