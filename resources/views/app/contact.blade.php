@extends('layouts.app')

@section('content')
<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contact Us</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active"> Contact Us </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Contact Us  -->
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="contact-info-left">
                    <h2>CONTACT INFO</h2>
                    <p>Informasi Lebih Lanjut Silahkan Hubungi Kontak Dibawah Ini. </p>
                    <ul>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i>Alamat: Perdos Blok T No 20 <br>Kendari,<br> 93231 </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone-square"></i>Handphone: <a href="tel:+62-85256102132">+62-85256102132</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">windyastuti964@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="contact-form-right">
                    <h2>Kami senang Anda tertarik untuk menghubungi kami.</h2>
                    <p> Silakan isi formulir di bawah ini dengan informasi Anda, termasuk nama, email, subjek, dan pesan. Tim kami akan segera merespons permintaan Anda..</p>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required data-error="Tolong Masukkan Nama Anda">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Email Anda" id="email" class="form-control" name="name" required data-error="Tolong Masukkan Email Anda">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="name" placeholder="Subject" required data-error="Masukkan Subjek Anda">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Pesan Anda" rows="4" data-error="Tulisan Pesan Anda" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" id="submit" type="submit">Kirim Pesan</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart -->
@endsection