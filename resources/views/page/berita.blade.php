@extends('layouts.app')

@section('title','Berita')

@section('content')
<div class="container flex-grow-1 mt-5 mb-2 d-flex flex-column 
justify-content-center align-items-center">
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
                    <h5 class="card-title mb-2">{{ $berita->title }}</h5>
                    <p class="card-text">{{ Str::limit($berita->description, 50)}}</p>
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
                    <a href="{{ route('berita.show', $berita->id) }}" class="btn" style="background-color: #00138e; border-color: #00138e; color: white;">Detail Berita</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $beritas->links() }}
    </div>
</div>
</div>
@endsection