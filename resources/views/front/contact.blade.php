@extends('front.layouts.master')
@section('title') İletişim @endsection
@section('content')
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>İletİşİm<span></span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{route('front.mainpage')}}">Ana Sayfa</a><i>|</i></li>
                        <li>İletİşİm</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>
    <!--/contact-->
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="contact-grid-agile-w3s">
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w31">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h4>Adres</h4>
                        <p>Baki Komsuoğlu bulvarı No:515, Umuttepe <span>İzmit/Kocaeli, Türkiye</span></p>
                    </div>
                </div>
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w32">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4>Bizi Ara</h4>
                        <p>+90 262 303 1000<span>+90 262 303 3002</span></p>
                    </div>
                </div>
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w33">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <h4>Email</h4>
                        <p><a href="mailto:info@example.com">infoutland@gmail.com <br><br></a></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="contact-w3-agile1 map" data-aos="flip-right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12077.237228517542!2d29.918740370583297!3d40.82116926952551!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc81fa849234e8755!2sKocaeli%20%C3%9Cniversitesi!5e0!3m2!1str!2sus!4v1646225304603!5m2!1str!2sus" class="map" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="agile-contact-grids">
                <div class="agile-contact-left">
                    <div class="col-md-6 address-grid">
                        <h4><span>Daha Fazla Bilgi</span> İçin </h4>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Telefon </p><span>+90 262 303 1000</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Mail </p><a href="mailto:info@example.com">infooutland@gmail.com</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Adres</p><span>Baki Komsuoğlu bulvarı No:515, Umuttepe</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
                            <li class="share">BİZİ PAYLAŞ : </li>
                            <li><a href="#" class="facebook">
                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                            <li><a href="#" class="twitter">
                                    <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                            <li><a href="#" class="instagram">
                                    <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                            <li><a href="#" class="pinterest">
                                    <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                        </ul>
                    </div>


                    <div class="col-md-6 contact-form">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        <h4 class="white-w3ls">İletİşİm <span>Formu</span></h4>
                        <form method="POST" action="{{ route('front.contact-form.store') }}">

                            {{ csrf_field() }}
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="name" value="{{ old('name') }}" required="">
                                <label>Ad Soyad</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="email" name="email" value="{{ old('email') }}" required="">
                                <label>Email</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="subject" value="{{ old('subject') }}" required="">
                                <label>Konu</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <textarea name="messages" required="">{{ old('message') }}</textarea>
                                <label>Mesaj</label>
                                <span></span>
                            </div>
                            <input type="submit" value="GÖNDER">
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//contact-->
    <!--/grids-->
    <div class="coupons">
        <div class="coupons-grids text-center">
            <div class="w3layouts_mail_grid">
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>ÜCRETSİZ KARGO</h3>
                        <p>1000 TL üzeri alışverişlerinizde kargo ücretsiz.</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-headphones" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>7/24 CANLI DESTEK</h3>
                        <p>7/24 Canlı Destek hattımız mevcuttur.</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>İADE GARANTİSİ</h3>
                        <p>Herhangi bir sorunda iade garantisi vardır.</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>HEDİYE KUPONLAR</h3>
                        <p>Alışveriş yaptıkça indirim kuponları kazanın.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <!--grids-->
@endsection
