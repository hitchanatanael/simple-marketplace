<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();

        $data = [
            'kategori' => $kategori,
        ];

        return view('admin.kategori', $data);
    }

    public function create()
    {
        return view('admin.tambah-kategori');
    }

    public function store(Request $request)
    {
        Kategori::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('kategori');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);

        $data = [
            'kategori' => $kategori,
        ];

        return view('admin.edit-kategori', $data);
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('kategori');
    }

    public function hapus($id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();

        return redirect()->back();
    }
}
