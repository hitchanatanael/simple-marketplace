@extends('layouts.admin')
@section('main')
    <h1 class="mb-4">Edit Data Produk</h1>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $produk->nama }}">
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}">
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" name="kategori_id" aria-label="Default select example">
                <option selected>Pilih Kategori</option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $produk->kategori_id ? 'selected' : '' }}>
                        {{ $item->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Ganti Foto (Opsional)</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>

        @if ($produk->foto)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto Produk" width="150">
            </div>
        @endif

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">
                Ubah Data
            </button>
        </div>

    </form>
@endsection
