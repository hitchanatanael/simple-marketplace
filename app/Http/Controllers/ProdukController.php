<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::with('kategori')->get();

        $data = [
            'produk' => $produk,
        ];

        return view('admin.produk', $data);
    }

    public function create()
    {
        $kategori = Kategori::all();

        $data = [
            'kategori' => $kategori,
        ];

        return view('admin.tambah-produk', $data);
    }

    public function store(Request $request)
    {
        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('produk', 'public');
        }

        Produk::create([
            'kategori_id' => $request->kategori_id,
            'nama'        => $request->nama,
            'harga'       => $request->harga,
            'foto'        => $path,
        ]);

        return redirect()->route('produk');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();

        $data = [
            'title'     => 'Edit',
            'produk'    => $produk,
            'kategori'  => $kategori,
        ];

        return view('admin.edit-produk', $data);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $path = $produk->foto;
        if ($request->hasFile('foto')) {
            // Hapus foto lama kalau ada
            if ($path && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }

            $path = $request->file('foto')->store('produk', 'public');
        }

        $produk->update([
            'kategori_id' => $request->kategori_id,
            'nama'        => $request->nama,
            'harga'       => $request->harga,
            'foto'        => $path,
        ]);

        return redirect()->route('produk');
    }

    public function hapus($id)
    {
        $produk = Produk::findOrFail($id);

        if ($produk->foto && Storage::disk('public')->exists($produk->foto)) {
            Storage::disk('public')->delete($produk->foto);
        }

        $produk->delete();

        return redirect()->back();
    }
}
