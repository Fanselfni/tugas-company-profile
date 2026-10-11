@extends('layouts.app')

@section('title','Berita')

@section('content')
<div class="container flex-grow-1">
    <div class="md-4 text-center">
        <h2 class="fw-bold">Berita Terbaru</h2>
        <p class="text-muted">Daftar berita terkini tentang perusahaan</p>
    </div>
    <div class="row g-4">
        @foreach ($beritas as $berita)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/'.$berita->image)}}" alt="" class="card-img-top"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title mb-4">{{ $berita->title }}</h5>
                    <p class="card-text">{{ Str::limit($berita->description, 50)}}</p>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-primary">Detail Berita</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection