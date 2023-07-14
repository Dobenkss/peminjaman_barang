<?= $this->extend('layout_admin/template') ?>
<?= $this->section('content') ?>
    <form action="/barang/update/<?= $barang['id'] ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="form-group">
            <label>Barang</label>
            <input type="text" name="barang" class="form-control" value="<?= $barang['barang'] ?>">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"><?= $barang['deskripsi'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control-file">
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="tersedia" <?= $barang['status'] == 'tersedia' ? 'selected' : '' ?>>Tersedia</option>
                <option value="dipinjam" <?= $barang['status'] == 'dipinjam' ? 'selected' : '' ?>>Dipinjam</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
<?= $this->endSection() ?>