<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('admin.produk');
    }

    public function create()
    {
        return view('admin.tambah-produk');
    }
}
