@extends('layouts.app')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Materi Kursus</h3>
                    <p class="text-subtitle text-muted">Kumpulan semua materi kursus</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Materi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List Materi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('materi.create') }}" class="btn btn-primary">Tambah Materi</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Judul Materi</th>
                                <th>Deskripsi</th>
                                <th>Link Materi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($materi as $item)
                                <tr>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td><a href="{{ $item->link_materi }}">Klik Disini</a></td>
                                    <td>
                                        <a href="{{ route('materi.edit', $item) }}"
                                            class="btn btn-primary align-middle">Edit</a>
                                        <form action="{{ route('materi.delete', $item) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
