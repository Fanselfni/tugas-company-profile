<nav class="navbar navbar-expand-lg navbar-dark custom-header shadow-sm mb-2" style="height: 80px; position: sticky; top: 0; z-index: 1000;">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand fw-bold text-black"><img src="https://pixabay.com/id/images/download/2998800-eye-1915454_1920.png" alt=""> CoreVision Systems</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-black" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/berita')}}" class="nav-link">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/kontak')}}" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/about')}}" class="nav-link">About</a>
                        </li>
                    </ul>
                    </div>
                </div>
        </nav>