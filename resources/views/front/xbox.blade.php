@extends('front.layouts.master')
@section('title') Doğa Sporları @endsection
@section('content')

<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Doğa Sporları<span></span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="{{route('front.mainpage')}}">Ana Sayfa</a><i>|</i></li>
                    <li>Doğa Sporları</li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>
    <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
        <div class="container">
             <!-- mens -->
            <div class="col-md-4 products-left">

                <div class="css-treeview">
                    <h4>TÜR</h4>
                    <ul class="tree-list-pad">
                        @foreach($kinds as $kind)
                            <li><a href="#" style="margin: 0; padding: 0; font-size: 16px;">
                                    <input type="checkbox" checked="checked" id="item-0"/>
                                    <label for="item-0">
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        {{$kind->name}}
                                    </label>
                                </a>
                            </li>
                        @endforeach
                        {{--<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Aksiyon</label></li>
                        <li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Bulmaca</label></li>
                        <li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Dövüş</label>
                        <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Nişancı</label>
                        <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Rol Yapma</label>
                        <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Simülasyon</label>
                        <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Spor</label>
                        <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Strateji</label>
                        <li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Yarış</label>
                        </li>--}}
                    </ul>
                </div>
                <div class="community-poll">
                    <h4>YAYINCI</h4>
                    <div class="swit form">
                        <form>
                            @foreach($xboxPublishers as $publisher)
                                <div class="check_box">
                                    <a href="#">
                                        <div class="radio">
                                            <label><input type="radio" name="radio"><i></i>
                                                {{$publisher->name}}
                                            </label>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            {{--<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Ubisoft</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>2K Games</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Sony Interactive Ent.</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>RockStar Games</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Electronic Arts</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>WarnerBros Games</label> </div></div>
                            <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>CD Projekt Red</label> </div></div>--}}
                            <input type="submit" value="FİLTRELE">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
             <!--   <h5>Ürün <span>Karşılaştırma(0)</span></h5>
                <div class="sort-grid">
                    <div class="sorting">
                        <h6>Sırala</h6>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">Varsayılan</option>
                            <option value="null">İsim (A - Z)</option>
                            <option value="null">İsim (Z - A)</option>
                            <option value="null">Fiyat (Çok - Az)</option>
                            <option value="null">Fiyat (Az - Çok)</option>
                            <option value="null">En Yeni</option>
                            <option value="null">Çok Satan</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sorting">
                        <h6>Göster</h6>
                        <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">7</option>
                            <option value="null">14</option>
                            <option value="null">28</option>
                            <option value="null">35</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>-->
                <div class="men-wear-top">

                    <div  id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <img class="img-responsive" src="{{asset('front/images')}}/slider3.jpg"
                                     alt=" "/>
                            </li>
                            <li>
                                <img class="img-responsive" src="{{asset('front/images')}}/slider.jpg"
                                     alt=" "/>
                            </li>
                            <li>
                                <img class="img-responsive" src="{{asset('front/images')}}/slider4.jpg"
                                     alt=" "/>
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-bottom">
                    <div class="col-sm-4 men-wear-left">
                        <img class="img-responsive" src="{{asset('front/images')}}/xbox.jpg" alt=" " />
                    </div>
                    <div class="col-sm-8 men-wear-right">
                        <h4>Doğa  <span>Sporları</span></h4>
                        <p style="text-align: justify">Doğa sporları kategorimiz, doğa severlerin ihtiyaçlarını karşılamak için tasarlanmış en kaliteli ekipmanları sunar. Bu kategoride, bisiklet, koşu, yürüyüş, tırmanma, kamp, balıkçılık ve daha birçok outdoor aktiviteye yönelik ürünleri bulabilirsiniz.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
        </div>
            <div class="single-pro">
                {{--       PRODUCT DIV         --}}
                @foreach($products as $product)
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{$product->coverImage}}" alt="" width="255px" height="248px" style="object-fit: contain" class="pro-image-front">
                                <img src="{{$product->coverImage}}" alt="" width="255px" height="248px" style="object-fit: contain" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{route('front.product.detail.index', $product->id)}}" class="link-product-add-cart">Hemen İncele</a>
                                    </div>
                                </div>
                                <span class="product-new-top">YENİ!</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="{{route('front.product.detail.index', $product->id)}}">{{$product->name}}</a></h4>
                                <div class="info-product-price">
                                    @if($product->discountRate !== 0)
                                        <span class="item_price">{{number_format($product->price-($product->price*($product->discountRate / 100)), 2)}}₺</span>
                                        <del>{{$product->price}}₺</del>
                                    @else
                                        <span class="item_price">{{$product->price}} ₺</span>
                                    @endif
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="{{route('front.cart.add')}}" method="post">
                                        @csrf
                                        <fieldset>
                                            <input type="hidden" name="product_id" value="{{$product->id}}" id="">
                                            <input type="submit" name="submit" value="Sepete Ekle" class="button">
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                {{--        /PRDOCUT DIV        --}}
                <div class="clearfix"></div>
            </div>
    </div>
    <!-- //mens -->
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
