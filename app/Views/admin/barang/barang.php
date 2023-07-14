<?= $this->extend('layout_admin/template') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-2 text-gray-800">Barang</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Barang</h6>
        <a href="barang/create" class="btn btn-success">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Barang</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barangs as $key => $barang) : ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $barang['barang']; ?></td>
                            <td><?php echo $barang['deskripsi']; ?></td>
                            <td><?= $barang['gambar']; ?></td>
                            <td><?php echo $barang['status']; ?></td>
                            <td>
                                <a href="/barang/edit/<?= $barang['id'] ?>" class="btn btn-primary btn-sm">edit</i></a>
                                <a href="/barang/delete/<?= $barang['id'] ?>" class="btn btn-danger btn-sm">delete</i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </body>

            </html>
            <?= $this->endSection() ?>