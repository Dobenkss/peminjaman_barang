    <?= $this->extend('layout_admin/template') ?>
    <?= $this->section('content') ?>
    <h1 class="h3 mb-2 text-gray-800">Barang</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="/barang/store" method="POST" enctype="multipart/form-data">
                    <label for="barang">Barang:</label>
                    <input type="text" name="barang" id="barang" class="form-control" required><br>

                    <label for="deskripsi">Deskripsi:</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea><br>

                    <label for="gambar">Gambar:</label>
                    <input type="file" name="gambar" id="gambar" required><br>

                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="tersedia">Tersedia</option>
                        <option value="dipinjam">Dipinjam</option>
                    </select><br>

                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
                <?= $this->endSection() ?>