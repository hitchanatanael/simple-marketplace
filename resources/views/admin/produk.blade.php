@extends('layouts.admin')
@section('main')
    <div class="pagetitle">
        <h1>Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Produk</li>
            </ol>
        </nav>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('tambah-produk') }}" class="btn btn-primary">Tambah Produk</a>
    </div>

    <div class="card pt-3">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Kategori</th>
                        <th scope="col" width="150px" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($produk as $item)
                        <tr>
                            <th scope="row">{{ $no++ }}.</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->foto) }}" width="70">
                            </td>
                            <td>{{ $item->kategori->nama }}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning">Edit</a>

                                    <form action="{{ route('produk.hapus', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
