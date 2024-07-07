@extends('layouts.app')

@section('content')
<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>ABOUT US</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">ABOUT US</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->
<div class="about-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="noo-sh-title">Toko Lego <span>Kami</span></h2>
                <p>"Selamat datang di Lego Windy, tujuan utama Anda untuk segala hal yang berhubungan dengan Lego! Kami adalah toko khusus yang berkomitmen untuk menyediakan beragam set Lego, mulai dari koleksi klasik hingga edisi terbatas dan eksklusif".</p>
            </div>
            <div class="col-lg-6">
                <div class="banner-frame"> <img class="img-thumbnail img-fluid" src="{{ asset('vendor/app/images/Store.png') }}" alt="" />
                </div>
            </div>
        </div>
        <br><hr>
        <div class="row my-6">
            <div class="col-12">
                <h2 class="noo-sh-title">Visi Misi</h2>
            </div>
            <div class="col-sm-6">
                <div class="hover-team">
                    <div class="our-team">
                        <div class="team-conten">
                            <h3 class="title">Visi</h3>
                        </div>
                    </div>
                    <div class="team-description">
                        <p>Kami berkomitmen untuk menjadi tempat terbaik bagi pecinta Lego di seluruh dunia, menyediakan produk dan layanan yang menginspirasi kreativitas dan imajinasi tanpa batas. LegoLandia bukan hanya sekedar toko, tetapi juga komunitas di mana para penggemar Lego dapat berkumpul, berbagi, dan berkreasi bersama. </p>
                    </div>
                    <hr class="my-0"> 
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hover-team">
                    <div class="our-team">
                        <div class="team-conten">
                            <h3 class="title">Misi</h3>
                        </div>
                    </div>
                    <div class="team-description">
                        <p>Kami berkomitmen untuk menjadi tempat terbaik bagi pecinta Lego di seluruh dunia, menyediakan produk dan layanan yang menginspirasi kreativitas dan imajinasi tanpa batas. Lego Windy bukan hanya sekedar toko, tetapi juga komunitas di mana para penggemar Lego dapat berkumpul, berbagi, dan berkreasi bersama. </p>
                    </div>
                    <hr class="my-0"> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
