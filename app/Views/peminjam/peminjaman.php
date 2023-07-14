<?= $this->extend('layout_member/template') ?>
<?= $this->section('content') ?>
<h1 class="h3 mb-2 text-gray-800">Barang</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4><?= $barang['barang']; ?></h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="<?= site_url('peminjaman/store'); ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="no_telepon">No. Telepon</label>
                    <input type="number" id="no_telepon" name="no_telepon" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Peminjaman</label>
                    <input type="date" class="form-control datepicker" name="tanggal_mulai" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" class="form-control datepicker" name="tanggal_selesai" required>
                </div>
        </div>
        <div class="form-group">
            <label for="tujuan">Tujuan</label>
            <textarea id="tujuan" name="tujuan" class="form-control" required></textarea>
        </div>
        <input type="hidden" name="barang_id" value="<?= $barang['id']; ?>">
        <button type="submit" class="btn btn-primary" id="bmit-button">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>