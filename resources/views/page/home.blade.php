@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container flex-grow-1 mt-5 mb-2 d-flex flex-column justify-content-center align-items-center text-white" class="home"
style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 10px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="text-dark"> Selamat Datang</h1>
            <p class="fs-4 text-dark"> CoreVision Systems menyelesaikan berbagai tantangan teknologi informasi dengan solusi inovatif dan berkualitas tinggi.
                    Kami berkomitmen untuk memberikan layanan terbaik kepada pelanggan kami, dengan tim yang berpengalaman dan berdedikasi.
            </p>
            <a class="btn btn-primary" style="background-color: #00138e; border-color: #00138e;" href="{{url('/about')}}"> Tentang Perusahaan </a>
        </div>
    </div>
</div>
@endsection