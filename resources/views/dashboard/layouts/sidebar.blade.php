<link rel="stylesheet" href="{{ asset('css/sidebars.css')  }}">
<script src="{{ asset('js/sidebars.js') }}"></script>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-3">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item px-2">
                <a href="{{ route('home') }}" class="nav-link px-3 mb-2 mt-3 {{ Request::is('home') ? 'active' : '' }}">
                    <img src="{{ asset('icons/house-door.svg') }}" alt="" width="22" height="20">
                    Dashboard
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link mb-2 {{ Request::is('providers', 'providers/create') ? 'active' : '' }}" href="{{ url('/providers') }}">
                    <img src="{{ asset('icons/sim.svg') }}" alt="" width="22" height="20">
                    Providers
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link {{ Request::is('paket', 'paket/create') ? 'active' : '' }}" href="{{ url('/paket') }}">
                    <img src="{{ asset('icons/gift.svg') }}" alt="" width="22" height="20">
                    Paket
                </a>
            </li>
        </ul>
        <hr>
        <div class="px-4 mt-4">
            <form id="logout-form" action="{{ route('logout') }}" method="post">
                @csrf
                <button class="border-0 nav-link bg-transparent" type="submit" onclick="return confirm('Ingin Keluar Dari Aplikasi ?');"><img src="{{ asset('icons/power.svg') }}" alt="" width="22" height="20"> Keluar</button>
            </form>
        </div>
    </div>
</nav>