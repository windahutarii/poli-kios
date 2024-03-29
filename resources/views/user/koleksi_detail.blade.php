@extends('layouts.app')
@section('title', 'Detail')

@section('content')
    <div class="container-xxl bg-white p-0">

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">POLI KIOS</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Detail Poli Kios</h6>
                        <h1 class="mb-4">{{ $detail->nama_kios }}</h1>
                        <p class="mb-4">{{ $detail->deskripsi }}</p>
                        <div class="row g-3 pb-4">
                            @if ($detail->wifi > 0)
                                <div class="col-sm-3 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="p-1">
                                        <div class="text-center p-4">
                                            <i class="fa fa-wifi fa-2x text-primary mb-2"></i>
                                            <p class="mb-0">Free WiFi</p>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($detail->parkir > 0)
                                <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="p-1">
                                        <div class="text-center p-4">
                                            <i class="fa fa-parking fa-2x text-primary mb-2"></i>
                                            <p class="mb-0">Parking Area</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.5s">
                                <div class="p-1">
                                    <div class="text-center p-4">
                                        <i class="fa fa-file fa-2x text-primary mb-2"></i>
                                        <p class="mb-0">IBM Sertificate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.5s">
                                <div class="p-1">
                                    <div class="text-center p-4">
                                        <i class="fa fa-arrows-alt fa-2x text-primary mb-2"></i>
                                        <p class="mb-0">22 m<sup>2</sup></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Sewa sekarang </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-12 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div class="col-4 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                            </div>
                            <div class="col-4 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-4 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>

                        </div>
                        <!-- <div>
                                                                                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" >
                                                                                            </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
@endsection
