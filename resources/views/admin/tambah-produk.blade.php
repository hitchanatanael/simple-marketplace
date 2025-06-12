@extends('layouts.admin')
@section('main')
    <div class="pagetitle">
        <h1>Tambah Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
        </nav>
    </div>

    <div class="card pt-3">
        <div class="card-body">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga">
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>-- Pilih Kategori --</option>
                    <option value="1">Makanan</option>
                    <option value="1">Minuman</option>
                </select>
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        Simpan Data
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
