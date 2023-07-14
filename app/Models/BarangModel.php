<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['barang', 'deskripsi', 'gambar', 'status'];

    public function getBarang()
    {
        return $this->findAll();
    }

    public function getBarangByID($id)
    {
        return $this->find($id);
    }

    public function addBarang($data)
    {
        return $this->insert($data);
    }

    public function updateBarang($id, $data)
    {
        $data['id'] = $id; // Tambahkan kunci 'id' ke data
        return $this->update($id, $data);
    }

    public function deleteBarang($id)
    {
        return $this->delete($id);
    }
}
