<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->

<link href="{{ asset('dist/animate/animate.min.css') }}" rel="stylesheet">

<link href="{{ asset('dist/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Template Stylesheet -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


<!--
<nav class="navbar navbar-expand-md navbar-light bg-white p-0">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <- Header Start ->
        <div class="container-fluid bg px-0">
            <div class="row gx-0">
                <div class="col-lg-3 d-none d-lg-block">
                    <a class="navbar-brand" href="{{ route('landing') }}">
                        <h1 class="m-0 text-primary text-uppercase">POLI KIOS</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.html" class="nav-item nav-link active">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Services</a>
                                <a href="room.html" class="nav-item nav-link">Rooms</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.html" class="dropdown-item">Booking</a>
                                        <a href="team.html" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <nav class="btn btn-primary rounded-0 px-md-5 d-none d-lg-block">
                                <!-- Authentication Links ->
                                @guest
                                        @if (Route::has('login'))
    <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
    @endif

                                        @if (Route::has('register'))
    <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
    @endif
@else
    <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                @endguest
                            </nav>


                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End ->

    </div>
</nav> -->

<nav class="navbar navbar-expand-md navbar-light bg-white p-0">
    <div class="container" style="display: block;">
        <header
            class="d-flex navbar-conts flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-3 mt-3">

            <a href="{{ route('landing') }}"
                class="navbarlogo d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none w-auto">
                <!--<img src="https://www.clipartmax.com/png/full/357-3572287_southwestern-connections-inc-ss-green-projects-logo.png"
                class="rounded-circle" width="32" height="32" alt="" />-->
                POLI KIOS
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Beranda</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Koleksi</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Tentang kami</a></li>
            </ul>

            <div class="col-md-5 text-end">
                @guest
                    @if (Route::has('login'))
                        <a class="btn btn-outline-primary rounded-pill me-2"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                    @if (Route::has('register'))
                        <a class="btn btn-primary rounded-pill" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </div>

        </header>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>

        <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
    </div>
</nav>













<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('dist/wow/wow.min.js') }}"></script>
<script src="{{ asset('dist/easing/easing.min.js') }}"></script>
<script src="{{ asset('dist/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('dist/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('dist/owlcarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('dist/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('dist/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('dist/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
