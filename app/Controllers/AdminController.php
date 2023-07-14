<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function admin()
    {
        $userModel = new UserModel();

        // Ambil data pengguna dengan peran "admin"
        $admin = $userModel->where('role', 'admin')->findAll();

        return view('admin/admin', ['admin' => $admin]);
    }
}
