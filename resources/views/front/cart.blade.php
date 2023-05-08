@extends('front.layouts.master')
@section('title') Sepetim @endsection
@section('content')
    <main class="container2">
        <h1 class="heading"></h1>
        <div class="item-flex">

            <!-- Kredi Kartı Kodları Kaynak
            https://codepen.io/quinlo/pen/YONMEa
            -->
            <section class="checkout">
                <h2 class="section-heading">Ödeme Detayları</h2>
                <div class="payment-form">

                    <div class="container3 preload">
                        <div class="creditcard">
                            <div class="front">
                                <div id="ccsingle"></div>
                                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                    <g id="Front">
                                        <g id="CardBackground">
                                            <g id="Page-1_1_">
                                                <g id="amex_1_">
                                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                            C0,17.9,17.9,0,40,0z" />
                                                </g>
                                            </g>
                                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                                        </g>
                                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4"> </text>
                                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6"> </text>
                                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">Kart Sahibinin İsmi</text>
                                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8"></text>
                                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">Kart Numarası</text>
                                        <g>
                                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">Son K.</text>
                                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">Tarihi</text>
                                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                                        </g>
                                        <g id="cchip">
                                            <g>
                                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                                </g>
                                                <g>
                                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                                </g>
                                                <g>
                                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                                </g>
                                                <g>
                                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                                </g>
                                                <g>
                                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                                </g>
                                                <g>
                                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                                </g>
                                                <g>
                                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Back">
                                    </g>
                                </svg>
                            </div>
                            <div class="back">
                                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                    <g id="Front">
                                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                                    </g>
                                    <g id="Back">
                                        <g id="Page-1_2_">
                                            <g id="amex_2_">
                                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                        C0,17.9,17.9,0,40,0z" />
                                            </g>
                                        </g>
                                        <rect y="61.6" class="st2" width="750" height="78" />
                                        <g>
                                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                                            <rect0 x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                                        </g>
                                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7"></text>
                                        <g class="st8">
                                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">Güvenik Kodu</text>
                                        </g>
                                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13"></text>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <br>
                    <form action="{{route('front.order.add')}}" method="POST">
                        @csrf
                        <div class="form-container">
                            <div class="field-container">
                                <label for="name" class="label-default">Ad Soyad</label>
                                <input id="names" name="name" required class="input-default" maxlength="20" type="text">
                            </div>
                            <div class="field-container">
                                <label for="cardnumber" class="label-default">Kart Numarası</label>
                                <input id="cardnumber" class="input-default" required name="cardnumber" type="text" >
                                <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    
                                </svg>
                            </div>
                            <div class="field-container">
                                <label for="expirationdate" class="label-default">Son Kullanma Tarihi</label>
                                <input id="expirationdate" name="carddate" required class="input-default" type="text">
                            </div>
                            <div class="field-container">
                                <label for="securitycode" class="label-default">CVV</label>
                                <input id="securitycode" name="cardcvv" required class="input-default" type="text" pattern="[0-9]*" inputmode="numeric">
                            </div>
                        </div>
                        @foreach($carts as $cart)
                        @foreach($products as $product)
                        @if($product->id === $cart->product_id)
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        @endif
                        @endforeach
                        @endforeach

                    
                </div>

              <!-- Sipariş toplam tutar hesaplama -->
                @php $total=0; @endphp

                @foreach($carts as $cart)
                @if(auth()->user()->id ?? '?' === $cart->user_id)
                @foreach($products as $product)
                @if($product->id === $cart->product_id)

                @php $total += $product->price @endphp
                
                
                @endif
                @endforeach
                @endif
                @endforeach
                
                <input type="hidden" id="ttl" name="total" class="inputs" readonly value="{{$total}}">

                <button class="btn1 btn-primary" type="submit">
                    <b>Ödeme Yap</b><span id="payAmount">{{$total}} ₺</span> 
                </button>

            </section>

  

        </form>


            <!--
              - cart section
            -->

            <section class="cart1">
                <div class="cart-item-box">
                    <h2 class="section-heading"> 🛒 Sepetim</h2>
                    <div class="product-card">
                    @foreach($carts as $cart)
                    @if(auth()->user()->id ?? '?' === $cart->user_id)

                        <div class="card">
                            @foreach($products as $product)
                            @if($product->id === $cart->product_id)

                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <div class="img-box">
                                <img src="{{asset($product->coverImage)}}" alt="Green tomatoes" width="65px"
                                     class="product-img">
                            </div>

                            <div class="detail">
                                <h4 class="product-name">{{$product->name}}</h4>
                                <div class="wrapper">
                                    <div class="product-qty">
                                        <button id="decrement">
                                            <ion-icon name="remove-outline"></ion-icon>
                                        </button>
                                        <span id="quantity">1</span>
                                        <button id="increment">
                                            <ion-icon name="add-outline"></ion-icon>
                                        </button>
                                    </div>
                                    <div class="price">
                                        <span id="price">{{$product->price}}</span> ₺
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <button class="product-close-btn"><a href="{{route('front.cart.remove', $cart->id)}}">
                                <ion-icon name="close-outline"></ion-icon></a>
                            </button>
                        </div>
                        <br>
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="wrapper">
                <hr>                
                    <div class="amount">
                        <div class="subtotal">
                            <span>Ara Toplam</span> <span><span id="subtotal">{{$total}}</span> ₺</span>
                        </div>
                        <div class="tax">
                            <span>Vergi</span> <span><span id="tax">0.0</span> ₺</span>
                        </div>

                        <div class="shipping">
                            <span>Nakliye</span> <span><span id="shipping">0.00</span> ₺</span>
                        </div>
                        <div class="total">
                            <span>Toplam</span> <span><span id="total"><input type="text" class="inputs" readonly value="{{$total}}"></span> ₺</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <h1 class="heading"></h1>
        <h1 class="heading"></h1>
    </main>
@endsection

@section('customPageCss')
    <link href="{{asset('front/css/cart.css')}}" rel="stylesheet" >
    <link href="{{asset('front/css/credit-cart.css')}}" rel="stylesheet" >

<style>
     .inputs[type=text]:read-only{
         background-color: white;
         border: none;
         text-align: right;
     }
</style>
@endsection

@section('customPageJs')

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{asset('front/js/credit-card.js')}}"></script>
    <script src="https://unpkg.com/imask"></script>
    <script>
        'use strict';
        // all initial elements
        const payAmountBtn = document.querySelector('#payAmount');
        const decrementBtn = document.querySelectorAll('#decrement');
        const quantityElem = document.querySelectorAll('#quantity');
        const incrementBtn = document.querySelectorAll('#increment');
        const priceElem = document.querySelectorAll('#price');
        const subtotalElem = document.querySelector('#subtotal');
        const taxElem = document.querySelector('#tax');
        const totalElem = document.querySelector('#total');


        // loop: for add event on multiple `increment` & `decrement` button
        for (let i = 0; i < incrementBtn.length; i++) {

            incrementBtn[i].addEventListener('click', function () {

                // collect the value of `quantity` textContent,
                // based on clicked `increment` button sibling.
                let increment = Number(this.previousElementSibling.textContent);

                // plus `increment` variable value by 1
                increment++;

                // show the `increment` variable value on `quantity` element
                // based on clicked `increment` button sibling.
                this.previousElementSibling.textContent = increment;

                totalCalc();

            });


            decrementBtn[i].addEventListener('click', function () {

                // collect the value of `quantity` textContent,
                // based on clicked `decrement` button sibling.
                let decrement = Number(this.nextElementSibling.textContent);

                // minus `decrement` variable value by 1 based on condition
                decrement <= 1 ? 1 : decrement--;

                // show the `decrement` variable value on `quantity` element
                // based on clicked `decrement` button sibling.
                this.nextElementSibling.textContent = decrement;

                totalCalc();

            });

        }


        // function: for calculating total amount of product price
        const totalCalc = function () {

            // declare all initial variable
            const tax = 0;
            let subtotal = 0;
            let totalTax = 0;
            let total = 0;

            // loop: for calculating `subtotal` value from every single product
            for (let i = 0; i < quantityElem.length; i++) {

                subtotal += Number(quantityElem[i].textContent) * Number(priceElem[i].textContent);

            }

            // show the `subtotal` variable value on `subtotalElem` element
            subtotalElem.textContent = subtotal.toFixed(2);

            // calculating the `totalTax`
            totalTax = subtotal * tax;

            // show the `totalTax` on `taxElem` element
            taxElem.textContent = totalTax.toFixed(2);

            // calcualting the `total`
            total = subtotal + totalTax;

            // show the `total` variable value on `totalElem` & `payAmountBtn` element
            totalElem.textContent = total.toFixed(2);
            payAmountBtn.textContent = total.toFixed(2);

            $('#ttl').val($('#total').text());

        }
    </script>
@endsection
