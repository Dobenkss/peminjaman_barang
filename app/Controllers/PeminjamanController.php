<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\PeminjamanModel;
use App\Models\UserModel;
use CodeIgniter\Session\Session;

class PeminjamanController extends BaseController
{
    public function index()
    {
        $peminjamanModel = new PeminjamanModel();
        $data['peminjaman'] = $peminjamanModel->findAll();

        return view('admin/peminjaman/peminjaman', $data);
    }

    public function ubahStatus($id)
    {
        $peminjamanModel = new PeminjamanModel();

        // Mengubah status peminjaman menjadi "Selesai"
        $peminjamanModel->update($id, ['status' => 'Dikembalikan']);

        return redirect()->to('/peminjaman');
    }

    public function daftarBarang()
    {
        $barangModel = new BarangModel;
        $data['barang'] = $barangModel->findAll();
        return view('peminjam/barang', $data);
    }

    public function prosesPeminjaman($id)
    {
        $barangModel = new BarangModel();
        $data['barang'] = $barangModel->find($id);

        return view('peminjam/peminjaman', $data);
    }

    public function store()
    {
        if (!session()->has('member')) {
            return redirect()->to('/');
        }

        // Dapatkan data user_id dari sesi anggota
        $user_id = session('member')['id'];

        // Mengambil data dari formulir
        $barang_id = $this->request->getPost('barang_id');
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $no_telepon = $this->request->getPost('no_telepon');
        $tanggal_mulai = $this->request->getPost('tanggal_mulai');
        $tanggal_selesai = $this->request->getPost('tanggal_selesai');
        $tujuan = $this->request->getPost('tujuan');

        // Memasukkan permintaan peminjaman ke dalam database
        $peminjamanModel = new PeminjamanModel();
        $status = "Sedang Dipinjam";
        $data = [
            'user_id' => $user_id,
            'barang_id' => $barang_id,
            'nama' => $nama,
            'nim' => $nim,
            'no_telepon' => $no_telepon,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'tujuan' => $tujuan,
            'status' => $status
        ];

        $peminjamanModel->insert($data);

        return redirect()->to('/daftar_barang')->with('success', 'Reservasi Berhasil! Silahkan Tunggu Konfirmasi dari Admin.');
    }
}
