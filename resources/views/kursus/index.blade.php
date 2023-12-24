@extends('layouts.app')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Jenis Kursus</h3>
                    <p class="text-subtitle text-muted">Daftar kursus yang tersedia</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Kursus</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar Kursus</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('kursus.create') }}" class="btn btn-primary">Tambah Kursus</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama Kursus</th>
                                <th>Deskripsi</th>
                                <th>Durasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kursus as $item)
                            <tr>
                                <td>{{$item->nama_kursus}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>{{$item->durasi}}</td>
                                <td>
                                    <a href="{{route('kursus.edit', $item)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('kursus.delete', $item) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            Hapus
                                        </button>
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
