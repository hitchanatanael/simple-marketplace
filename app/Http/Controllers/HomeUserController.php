<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Thumbnails;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function index()
    {
        $produk = Produk::with('kategori')->get();
        $thumbanails = Thumbnails::all();

        $data = [
            'produk'     => $produk,
            'thumbnails' => $thumbanails,
        ];

        return view('user.index', $data);
    }

    public function showKategori($nama)
    {
        $kategori = Kategori::where('nama', $nama)->firstOrFail();

        $produk = Produk::with('kategori')
            ->where('kategori_id', $kategori->id)
            ->get();

        $data = [
            'produk'   => $produk,
            'kategori' => $kategori,
        ];

        return view('user.kategori', $data);
    }
}
