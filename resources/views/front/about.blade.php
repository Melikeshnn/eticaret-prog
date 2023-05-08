@extends('front.layouts.master')
@section('title') Hakkımızda @endsection
@section('content')
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>HAKKIMIZDA <span></span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{route('front.mainpage')}}">Ana Sayfa</a><i>|</i></li>
                        <li>Hakkımızda</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>
    <!-- /banner_bottom_agile_info -->
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="agile_ab_w3ls_info">
                <div class="col-md-6 ab_pic_w3ls">
                    <img src="{{asset('front/images')}}/about.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 ab_pic_w3ls_text_info">
                    <h5>OUTLAND <span> HAKKINDA</span> </h5>
                    <p style=" text-align: justify;">OUTLAND, doğa severler için ihtiyaç duydukları her şeyi sunan bir online alışveriş sitesidir. Müşterilerimize kaliteli ve dayanıklı outdoor ekipmanları, giyim ve ayakkabıları sunarak, doğayı keşfetme tutkularını destekliyoruz.

                        Misyonumuz, outdoor aktivitelerine tutkulu olanlara en kaliteli ürünleri sunmak ve müşterilerimizin doğada keyifli ve güvenli bir deneyim yaşamalarını sağlamaktır. Sunduğumuz ürünler, dağcılık, trekking, kampçılık, bisiklet sürme, yürüyüş gibi outdoor aktiviteleri yaparken ihtiyaç duyulan tüm ekipmanları içerir.</p>
                    <p style=" text-align: justify;">Müşteri memnuniyeti odaklı, hızlı, güvenilir, kolay ulaşılabilir, anlık geri bildirim veren bir alışveriş hizmeti sunar. OUTLAND daima sürdürülebilir başarıyı hedeflemektedir.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="agile_ab_w3ls_info">
                <div class="col-md-6 ab_pic_w3ls_text_info">
                    <h5>MİSYONUMUZ<span></span> </h5>
                    <p style=" text-align: justify;">Her geçen gün gelişen dijital pazarlama dinamiklerini iş ortağı olan markalarla birleştirerek sektörde büyük ve öncü başarılara imza atmaktır. Tam operasyonel stratejileri doğrultusunda, her geçen yıl global bir marka olma yolunda ilerlemektedir.</p>
                    <p style=" text-align: justify;">Tam operasyonel stratejileri doğrultusunda, her geçen yıl global bir marka olma yolunda ilerlemektedir. 85’in üzerinde oyun firmasının Türkiye'deki yetkili satıcısı olarak, en geniş oyun kataloğuna sahip firmalarından biridir.</p>
                </div>
                <div class="col-md-6 ab_pic_w3ls_text_info">
                    <h5>VİZYONUMUZ<span></span> </h5>
                    <p style=" text-align: justify;">Her yıl bir öncekinden daha büyük başarılara imza atmak isteyen OUTLAND, bu doğrultuda daima ileriyi hedelemektedir. Tam operasyonel stratejileri doğrultusunda, her geçen yıl global bir marka olma yolunda ilerlemektedir.</p>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- team
    <div class="banner_bottom_agile_info team">
        <div class="container">
            <h3 class="wthree_text_info">Ekİp <span>Üyelerİmİz</span></h3>
            <div class="inner_w3l_agile_grids">
                <div class="col-md-3 team-grids">
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="{{asset('front/images')}}/hakan2.jpg" class="img-responsive" alt="" style="height: 339px; object-fit: cover;">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Hakan DİNÇTÜRK</h4>
                                <p>Web Programcısı</p>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
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
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="thumbnail team-w3agile">
                        <img src="{{asset('front/images')}}/cengiz.jpg" class="img-responsive" alt="" style="height: 339px; object-fit: cover;">
                        <div class="social-icons team-icons right-w3l fotw33">
                            <div class="caption">
                                <h4>Cengizhan DURMUŞ</h4>
                                <p>Web Programcısı</p>
                            </div> -->
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
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
                    </div>
                </div>
                <div class="col-md-3 team-grids">

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->

    <!-- schedule-bottom -->
    <div class="schedule-bottom">
        <div class="col-md-6 agileinfo_schedule_bottom_left">
            <img src="{{asset('front/images')}}/mid.jpg" alt=" " class="img-responsive" />
        </div>
        <div class="col-md-6 agileits_schedule_bottom_right">
            <div class="w3ls_schedule_bottom_right_grid">
                <h3>Misyon <span>&</span> Vizyon</h3>
                <p style=" text-align: justify;"> OUTDOOR olarak müşteri memnuniyeti bizim için önceliktir. Müşterilerimize en iyi hizmeti sunmak için, ürünlerimiz hakkında doğru ve eksiksiz bilgi sağlamaya özen gösteriyoruz. Ayrıca, müşterilerimizin sorularına ve endişelerine hızlı ve etkili bir şekilde yanıt vermek için çalışıyoruz. OUTDOOR, doğa ile bütünleşme tutkunu olanların ihtiyaçlarını karşılamak için burada. Bizimle birlikte, müşterilerimiz outdoor aktivitelerine hazır olacak ve doğanın sunduğu güzellikleri keşfetmenin keyfini çıkaracaklar.</p>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <h4>Üyeler</h4>
                    <h5 class="counter">250</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <h4>Ürünler</h4>
                    <h5 class="counter">85</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                    <h4>Ödüller</h4>
                    <h5 class="counter">45</h5>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //schedule-bottom -->
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
