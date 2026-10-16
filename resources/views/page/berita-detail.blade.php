@extends('layouts.app')

@section('title','Berita-Detail')

@section('content')
<div class="container flex-grow-1 mt-5 mb-2 d-flex flex-column 
justify-content-center align-items-center">
<div>
    <a href="{{ route('berita.index') }}" class="btn btn-secondary mb-3">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>
    <div class="md-4 text-center">
        <h2 class="fw-bold">Detail Berita</h2>
        <p class="text-muted">Informasi lengkap tentang berita perusahaan</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/'.$berita->image)}}" alt="" class="card-img-top"
                    style="height: 400px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title mb-4">{{ $berita->title }}</h5>
                    <p class="card-text">{{ $berita->description }}</p>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <div class="mb-2">
                        <small class="text-muted">Source : {{ $berita->source }}</small>
                    </div>
                    <div class="mb-2">
                        <small class="text-muted">Author : {{ $berita->author }}</small>
                    </div>
                    <div class="mb-2">
                        <small class="text-muted">Published : {{ $berita->published_at }}</small>
                    </div>
                </div>
            </div>
        </div>
@endsection