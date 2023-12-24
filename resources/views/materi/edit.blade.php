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
                        <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Tambah Materi
                </h5>
            </div>
            <div class="card-body">
                <form class="form form-horizontal" action="{{route('materi.update', $materi)}}" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="first-name-horizontal">Judul</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="first-name-horizontal" class="form-control" name="judul" value="{{$materi->judul}}">
                            </div>
                            <div class="col-md-4">
                                <label for="email-horizontal">Deskripsi</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="email-horizontal" class="form-control" name="deskripsi" value="{{$materi->deskripsi}} ">
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal">Link Materi</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="contact-info-horizontal" class="form-control" name="link_materi" value="{{$materi->link_materi}}" >
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal">Pilih Kursus</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <select name="course_id" class="form-select">
                                    @forelse ($course as $item)
                                    <option value="{{$item->id}}">{{$item->nama_kursus}}</option>
                                    @empty
                                        
                                    @endforelse

                                </select>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
</div>
@endsection