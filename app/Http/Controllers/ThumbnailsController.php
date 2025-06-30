<?php

namespace App\Http\Controllers;

use App\Models\Thumbnails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ThumbnailsController extends Controller
{
    public function index()
    {
        $thumbnails = Thumbnails::all();

        $data = [
            'thumbnails' => $thumbnails,
        ];
        return view('admin.thumbnails', $data);
    }

    public function create()
    {
        return view('admin.tambah-thumbnails');
    }

    public function store(Request $request)
    {
        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('produk', 'public');
        }

        Thumbnails::create([
            'nama' => $request->nama,
            'foto' => $path,
        ]);

        return redirect()->route('thumbnails');
    }

    public function hapus($id)
    {
        $produk = Thumbnails::findOrFail($id);

        if ($produk->foto && Storage::disk('public')->exists($produk->foto)) {
            Storage::disk('public')->delete($produk->foto);
        }

        $produk->delete();

        return redirect()->back();
    }
}
