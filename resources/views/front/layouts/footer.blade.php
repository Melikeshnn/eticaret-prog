<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="col-md-3 footer-left">
        <a href="{{route('front.mainpage')}}"><img style="width: 220px; height: 70px; object-fit: cover;" src="{{asset('front/images')}}/egooyun_logo.png" alt=""></a>
            <p>Resmi bir çevrimiçi dijital dağıtım platformudur.</p>
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
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Bağlantılar <span></span> </h4>
                    <ul>
                        <li><a href="/">Ana Sayfa</a></li>
                        <li><a href="{{route('front.about')}}">Hakkımızda</a></li>
                        <li><a href="{{route('front.bilgisayar')}}">Bilgisayar</a></li>
                        <li><a href="{{route('front.ps')}}">Playstation</a></li>
                        <li><a href="{{route('front.xbox')}}">Xbox</a></li>
                        <li><a href="{{route('front.contact')}}">İletişim</a></li>
                    </ul>
                </div>

                <div class="col-md-5 sign-gd-two">
                    <h4>Mağaza <span>Bilgileri</span></h4>
                    <div class="w3-address">
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Telefon Numarası</h6>
                                <p>+90 262 303 1000</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Mail Adresi</h6>
                                <p>Email :<a href="mailto:example@email.com"> infoegooyun@gmail.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Adres</h6>
                                <p>Baki Komsuoğlu Bulvarı No:515, Umuttepe
İzmit/Kocaeli, Türkiye

                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sign-gd flickr-post">
                    <h4>Popüler <span style="font-size:18px;">Markalar</span></h4>
                    <ul>
                        <li><a href=""><img src="{{asset('front/images')}}/ea.png" alt=" " class="img-responsive" /></a></li>
                        <li><a href=""><img src="{{asset('front/images')}}/intel2.png" alt=" " class="img-responsive" /></a></li>
                        <li><a href=""><img src="{{asset('front/images')}}/ps.png" alt=" " class="img-responsive" /></a></li>
                        <li><a href=""><img src="{{asset('front/images')}}/riot.png" alt=" " class="img-responsive" /></a></li>
                        <li><a href=""><img src="{{asset('front/images')}}/rockstar.png" alt=" " class="img-responsive" /></a></li>
                        <li><a href=""><img src="{{asset('front/images')}}/ubisoft2.png" alt=" " class="img-responsive" /></a></li>
                        <li><a href=""><img src="{{asset('front/images')}}/wb.png" alt=" " class="img-responsive" /></a></li>
                        <li><a href=""><img src="{{asset('front/images')}}/windows.png" alt=" " class="img-responsive" /></a></li>
                        <li><a href=""><img src="{{asset('front/images')}}/xbox.png" alt=" " class="img-responsive" /></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="agile_newsletter_footer">
            <div class="col-sm-6 newsleft">
                <h3>EĞLENCEYE VAR MISIN ?
</h3>
            </div>
            <div class="col-sm-6 newsright">
                <form action="#" method="post">
                    <input type="email" placeholder="Mail adresi gir..." name="email" required="">
                    <input type="submit" value="Gönder">
                </form>
            </div>

            <div class="clearfix"></div>
        </div>
        <p class="copy-right">&copy 2021 EGOOYUN - Tüm Hakları Saklıdır | Design by <a href="https://github.com/SoFY111/e-ticaret" target="_blank">BSM</a></p>
    </div>
</div>
<!-- //footer -->

<!-- js -->
<script type="text/javascript" src="{{asset('front/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{asset('front/js/modernizr.custom.js')}}"></script>
<!-- Custom-JavaScript-File-Links -->
<!-- cart-js -->
<script src="{{asset('front/js/minicart.min.js')}}"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

<!-- //cart-js -->
<!-- script for responsive tabs -->
<script src="{{asset('front/js/easy-responsive-tabs.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- //script for responsive tabs -->
<!-- stats -->
<script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('front/js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('front/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->

<script src="{{asset('front/js/responsiveslides.min.js')}}"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
</script>

<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('front/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/custom.js')}}"></script>
@yield('customPageJs')
</body>
</html>
