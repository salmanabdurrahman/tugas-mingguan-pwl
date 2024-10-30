<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";
?>

<div class="container mt-5">
    <h3 class="text-center">Edit Berita</h3>
    <form method="POST" action="berita_ubah_action.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul Berita</label>
            <input type="hidden" name="berita_id" value="<?php echo $data['berita_id']; ?>">
            <input type="text" name="judul" id="judul" value="<?php echo $data['berita_judul']; ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Berita</label>
            <textarea name="isi" id="isi" rows="6" class="form-control" required><?php echo $data['berita_isi']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control-file" required>
        </div>
        <div class="form-group">
            <label for="user_nama">Nama User</label>
            <input type="text" name="user_nama" id="user_nama" value="<?php echo $_SESSION['username']; ?>" readonly class="form-control">
        </div>
        <div class="text-center">
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form>
</div>

<?php include "../includes/footer.php"; ?>