@extends('layouts.admin')
@section('main')
    <div class="pagetitle">
        <h1>Tambah Thumbnails</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Tambah Thumbnails</li>
            </ol>
        </nav>
    </div>

    <div class="card pt-3">
        <div class="card-body">
            <form action="{{ route('thumbnails.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto">
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            Simpan Data
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
