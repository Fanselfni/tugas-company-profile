@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div>
    <div class="container flex-grow-1 mt-5 mb-2 d-flex flex-column justify-content-center align-items-center"
        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 10px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="fw-bold text-dark mb-3"> Contact Us </h2>
                <p class="fs-4 text-muted"> Jika Anda memiliki pertanyaan, saran, atau ingin menghubungi kami, silakan gunakan informasi kontak di bawah ini. Kami akan dengan senang hati membantu Anda.</p>
                <ul class="list-unstyled fs-5 text-muted">
                    <li><strong>Alamat:</strong> Gedung CoreVision Systems, Jl. MH Thamrin, Jakarta, Indonesia</li>
                    <li><strong>Email:</strong> <a href="mailto:info@corevisionsystems.com">info@corevisionsystems.com</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection