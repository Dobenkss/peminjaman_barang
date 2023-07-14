<?= $this->extend('layout_admin/template') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-2 text-gray-800">Peminjaman</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Peminjaman</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>No. Telepon</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Tujuan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peminjaman as $key => $p) : ?>
                        <tr>
                            <td><?= $key + 1; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['nim']; ?></td>
                            <td><?= $p['no_telepon']; ?></td>
                            <td><?= $p['tanggal_mulai']; ?></td>
                            <td><?= $p['tanggal_selesai']; ?></td>
                            <td><?= $p['tujuan']; ?></td>
                            <td><?= $p['status']; ?></td>
                            <td>
                                <?php if ($p['status'] === 'Sedang Dipinjam') : ?>
                                    <a href="<?= base_url('admin/peminjaman/ubah-status/' . $p['id']); ?>"><button class="btn btn-primary">Dikembalikan</button></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
<?= $this->endSection() ?>