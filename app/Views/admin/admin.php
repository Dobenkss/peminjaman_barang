<?= $this->extend('layout_admin/template') ?>
<?= $this->section('content') ?>

<h1 class="h3 mb-2 text-gray-800">Admin</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Admin</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin as $key => $adm) : ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $adm['nama']; ?></td>
                            <td><?php echo $adm['email']; ?></td>
                            <td><?= $adm['role']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </body>

            </html>
            <?= $this->endSection() ?>