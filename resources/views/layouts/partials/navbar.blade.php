<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container-fluid mx-5 py-1">
        <a class="navbar-brand" href="{{ route('landing') }}">Poli-Kios</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Koleksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang kami</a>
                </li>
            </ul>
            <form class="d-flex">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-success me-2" type="submit">Sign In</a>
                    <a href="{{ route('register') }}" class="btn btn-primary" type="submit">Sign Up</a>
                @else
                    <div class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #2275AF"
                            v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                            <a class="dropdown-item" href="{{ route('admin.home') }}">
                                <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>Dashboard</a>

                            <a class="dropdown-item" href="{{ route('pemilik.index') }}"><i
                                    class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>Data Pemilik</a>
                            <a class="dropdown-item" href="{{ route('kios.index') }}"><i
                                    class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>Data Kios</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
            </form>
        </div>
    </div>
</nav>
