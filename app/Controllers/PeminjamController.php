<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class PeminjamController extends BaseController
{
    public function index()
    {
        return view('peminjam/index');
    }

    public function member()
    {
        $userModel = new UserModel();

        // Ambil data pengguna dengan peran "admin"
        $member = $userModel->where('role', 'member')->findAll();

        return view('peminjam/peminjam', ['member' => $member]);
    }
}
