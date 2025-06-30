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

    public function showMakanan()
    {
        $produk = Produk::with('kategori')
            ->where('kategori_id', 1)
            ->get();

        $data = [
            'produk' => $produk,
        ];

        return view('user.makanan', $data);
    }

    public function showMinuman()
    {
        $produk = Produk::with('kategori')
            ->where('kategori_id', 2)
            ->get();

        $data = [
            'produk'     => $produk,
        ];

        return view('user.minuman', $data);
    }

    public function showKategori($nama)
    {
        $kategori = Kategori::where('nama', $nama)->firstOrFail();

        $produk = Produk::with('kategori')
            ->where('kategori_id', $kategori->id)
            ->get();

        return view('user.makanan', [
            'produk' => $produk,
            'kategori' => $kategori,
        ]);
    }
}
