@extends('layouts.admin')
@section('main')
    <div class="pagetitle">
        <h1>Kategori</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Kategori</li>
            </ol>
        </nav>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('tambah-kategori') }}" class="btn btn-primary">Tambah Kategori</a>
    </div>

    <div class="card pt-3">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="100px">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col" width="150px" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $no = 1;
                    @endphp
                    @foreach ($kategori as $item)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning">
                                        Edit
                                    </a>

                                    <form action="" method="POST">
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
