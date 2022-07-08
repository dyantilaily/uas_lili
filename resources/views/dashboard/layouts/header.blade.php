<header class="navbar navbar-dark sticky-top bg-warning flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ route('home') }}"> <img src="{{ asset('icons/favicon.png') }}" width="47px" alt=""> LiliCell</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap container">
            <h6>Hai, {{ Auth::user()->name}} <img src="{{ asset('icons/person-circle.svg') }}" alt="1" width="20px"></h6>
        </div>
    </div>
</header>