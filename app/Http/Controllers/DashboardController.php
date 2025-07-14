<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $produk = Produk::count();
        $kategori = Kategori::count();

        $data = [
            'produk' => $produk,
            'kategori' => $kategori,
        ];

        return view('admin.dashboard', $data);
    }
}
