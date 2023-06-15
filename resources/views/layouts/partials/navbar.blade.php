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
                <a href="{{ route('login') }}" class="btn btn-success me-2" type="submit">Sign In</a>
                <a href="{{ route('register') }}" class="btn btn-primary" type="submit">Sign Up</a>
            </form>
        </div>
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
