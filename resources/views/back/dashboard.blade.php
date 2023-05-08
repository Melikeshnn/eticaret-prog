@extends('back.layouts.master')
@section('title') Ana Sayfa @endsection
@section('content')
    <!-- Content Row -->
    <div style="display: flex; justify-content: center" class="alt2">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-60 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                               Toplam Sipariş Sayısı</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 15px">🛒 {{count($orders)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-60 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Onaylanan Siparişler</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 15px">✔️ {{count($approved)}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-60 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Reddedilen Siparişler
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" style="font-size: 15px">❌ {{count($denied)}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->

    <div class="limiter">
        <div class="d-flex justify-content-center shadow">
            <div class="wrap-table100">
                <div class="table">
    
                    <div class="row header">
                        <div class="cell">
                            Alıcı
                        </div>
                        <div class="cell">
                            Ürün Resmi
                        </div>
                        <div class="cell">
                            Ürün Adı
                        </div>
                        <div class="cell">
                            Fiyat
                        </div>
                        <div class="cell">
                            Durum
                        </div>
                        <div class="cell">
                            
                        </div>
                        <div class="cell" >
                            
                        </div>
                    </div>
    
                    @foreach($orders as $order)
                        <div class="row">
                            @foreach($users as $user)
                            @if($user->id === $order->user_id)
                            <div class="cell" data-title="Alıcı">
                                {{$user->name}} {{$user->surname}}
                            </div>
                            @endif
                            @endforeach

                            
                            @foreach($products as $product)
                            @if($product->id === $order->product_id)
                            <div class="cell" data-title="Ürün Resmi">
                                <img src="{{asset($product->coverImage)}}" width="40%" style="border-radius: 10px" class="img-responsive img" alt="res">
                            </div>
                            @endif
                            @endforeach

                            @foreach($products as $product)
                            @if($product->id === $order->product_id)
                            <div class="cell" data-title="Ürün Adı">
                                {{$product->name}}
                            </div>
                            @endif
                            @endforeach

                            <div class="cell" data-title="Fiyat">
                                {{$order->total}} ₺
                            </div>

                            <div class="cell" data-title="Durum">
                                @if($order->isDeleted == 2) <a href="" class="btn btn-warning btn-icon-split btn-sm"> <span class="icon text-white-50"> <i class="fas fa-info-circle"></i></span><span class="text">Beklemede</span></a> 
                                @elseif ($order->isDeleted == 0) <a href="" class="btn btn-success btn-icon-split btn-sm"> <span class="icon text-white-50"> <i class="fas fa-check"></i></span><span class="text">Onaylandı</span></a>
                                @else <a href="" class="btn btn-danger btn-icon-split btn-sm"> <span class="icon text-white-50"> <i class="fas fa-times"></i></span><span class="text">Reddedildi</span></a>
                                @endif
                            </div>

                            <div class="cell" data-title="Onayla" style="padding-left: 20px">
                                <button class="btn btn-primary"><a href="{{route('back.orders.updateStatus',['id' => $order->id, 'isDeleted' => 0])}}" style="color: white">Onayla</a></button>
                            </div>
                            <div class="cell" data-title="Reddet">
                                <button class="btn btn-danger"><a href="{{route('back.orders.updateStatus',['id' => $order->id, 'isDeleted' => 1])}}" style="color: white">Reddet</a></button>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<br>
@endsection

@section('customPageCss')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{asset('backTemplate/datatableUtils/vendor/animate')}}/animate.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('backTemplate/datatableUtils/vendor/select2')}}/select2.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('backTemplate/datatableUtils/vendor/perfect-scrollbar')}}/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backTemplate/datatableUtils/css')}}/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backTemplate/datatableUtils/css')}}/main.css">
    <style>
        .select2{
            width: 100% !important;
        }

        @media screen and (max-width: 768px){
            .alt2 {
    flex-direction: column;
}
        }


    </style>
@endsection

@section('customPageJs')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{asset('backTemplate/datatableUtils/vendor/bootstrap/js')}}/popper.js"></script>
    <script src="{{asset('backTemplate/datatableUtils/vendor/select2')}}/select2.min.js"></script>
    <script src="{{asset('backTemplate/datatableUtils/js')}}/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#flash-overlay-modal').modal();
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
            $('.selectedPassiveUser').select2();
            $('.selectedActiveUser').select2();
        });
    </script>
@endsection