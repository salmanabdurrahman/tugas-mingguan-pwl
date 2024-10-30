<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";
?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Tambah Berita</h2>
    <form method="POST" action="berita_tambah_action.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul Berita</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Berita</label>
            <textarea class="form-control" id="isi" name="isi" rows="6" required></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="form-group">
            <label for="user_nama">Nama User / Admin</label>
            <input type="text" class="form-control" id="user_nama" name="user_nama" value="<?php echo $_SESSION['username']; ?>" readonly>
        </div>
        <div class="text-center">
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
</div>

<?php include "../includes/footer.php"; ?>