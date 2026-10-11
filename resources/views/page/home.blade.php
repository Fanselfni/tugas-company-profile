@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> Selamat Datang</h1>
            <p class="fs-4 text-muted"> ini adalah halaman utama project laravel web 
                company profile sederhana yang sudah saya buat untuk memenuhi 
                tugas mata kuliah Rekayasa web. pada project ini saya menggunakan 
                framework laravel versi 10 dan menggunakan template bootstrap 5.3.2. 
                untuk database saya menggunakan mysql. pada project ini saya membuat 
                beberapa halaman seperti halaman utama, halaman berita, halaman profile 
                mahasiswa, halaman kontak, dan halaman login.
            </p>
            <a class="btn btn-success" href="{{url('/profile')}}"> Lihat Profile Mahasiswa</a>
        </div>
    </div>
</div>
@endsection