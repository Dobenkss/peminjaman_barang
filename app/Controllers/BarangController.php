<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Controllers\BaseController;

class BarangController extends BaseController
{
    public function index()
    {
        $barangModel = new BarangModel();
        $data['barangs'] = $barangModel->findAll(); // Menggunakan metode findAll() untuk mendapatkan semua data barang

        return view('admin/barang/barang', $data);
    }

    public function create()
    {
        return view('admin/barang/add_barang');
    }

    public function store()
    {
        // Validasi form
        $this->validate([
            'barang' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'gambar' => 'uploaded[gambar]|max_size[gambar,10240]',
        ]);

        // Ambil data dari form
        $barang = $this->request->getPost('barang');
        $deskripsi = $this->request->getPost('deskripsi');
        $status = $this->request->getPost('status');
        $gambar = $this->request->getFile('gambar');
        $nama_gambar = $gambar->getRandomName();

        // Pindahkan file gambar ke folder yang diinginkan (misalnya public/uploads/barang)
        $gambar->move('./public/uploads/barang', $nama_gambar);

        // Simpan data ke database
        $barangModel = new BarangModel();
        $barangModel->save([
            'barang' => $barang,
            'deskripsi' => $deskripsi,
            'status' => $status,
            'gambar' => $nama_gambar
        ]);

        // Redirect ke halaman daftar barang atau halaman lain yang diinginkan
        return redirect()->to('/barang')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $barangModel = new BarangModel();

        $data['barang'] = $barangModel->find($id);

        return view('admin/barang/edit_barang', $data);
    }

    public function update($id)
    {
        $barangModel = new BarangModel();

        $data = [
            'barang' => $this->request->getPost('barang'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'status' => $this->request->getPost('status')
        ];

        // Cek apakah ada file gambar yang diunggah
        $gambar = $this->request->getFile('gambar');
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Pindahkan file gambar ke direktori yang diinginkan (misalnya: public/uploads)
            $newName = $gambar->getRandomName();
            $gambar->move('./public/uploads/barang', $newName);

            // Simpan nama file gambar ke dalam array data
            $data['gambar'] = $newName;
        }

        $barangModel->update($id, $data);
        return redirect()->to('/barang')->with('success', 'Data barang berhasil diupdate.');
    }

    public function delete($id)
    {
        $barangModel = new BarangModel();

        $barangModel->delete($id);

        return redirect()->to('/barang')->with('success', 'Barang berhasil dihapus.');
    }
}
