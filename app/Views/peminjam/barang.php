<?= $this->extend('layout_member/template') ?>
<?= $this->section('content') ?>
<div class="section-body">
    <div class="row">
        <?php foreach ($barang as $brg) : ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4><?= $brg['barang']; ?></h4>
                        <div class="card-header-action">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-2 text-muted">deskripsi : <?= $brg['deskripsi']; ?></div>
                            <div class="mb-2 text-muted">Status : <?= $brg['status']; ?></div>
                            <div class="chocolat-parent">
                                <a href="<?= $brg['gambar']; ?>" class="chocolat-image" title="Just an example">
                                    <div data-crop-image="285">
                                        <img alt="gambar" src="<?= base_url('public/uploads/barang/' . $brg['gambar']); ?>" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <a href="<?= site_url('/prosespeminjaman' . $brg['id']); ?>" class="btn btn-primary">Ayo Pinjam!</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>