@extends('layouts.admin')
@section('main')
    <div class="pagetitle">
        <h1>Thumbnails</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Thumbnails</li>
            </ol>
        </nav>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('tambah-thumbnails') }}" class="btn btn-primary">Tambah Thumbnails</a>
    </div>

    <div class="card pt-3">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col" width="150px" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($thumbnails as $item)
                        <tr>
                            <th scope="row">{{ $no++ }}.</th>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->foto) }}" width="70">
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="btn btn-warning">Edit</a>

                                    <form action="{{ route('thumbnails.hapus', $item->id) }}" method="POST">
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
