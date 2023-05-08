@extends('front.layouts.master')
@section('title') Sepetim @endsection
@section('content')

<div class="banner_bottom_agile_info">
    <div class="container">
        <h2 class="hdg">Siparişlerim</h2>

<div class="bs-docs-example table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
              <th>#</th>
              <th>Ürün Adı</th>
              <th>Ürün Resmi</th>
              <th>Fiyat</th>
              <th>Durum</th>
            </tr>
        </thead>
        <tbody>
         <p style="visibility: hidden"> {{$max=1}} </p>
            @foreach($orders as $order)
                <tr>
                  <td>{{ $loop->index }}</td>

                  @foreach($products as $product)
                      @if($product->id === $order->product_id)
                      <td>{{$product->name}}</td>
                      <td><img src="{{asset($product->coverImage)}}" width="15%" style="border-radius: 15px" class="img-responsive img" alt="res"></td>
                      @endif
                  @endforeach

                  <td>{{$order->total}} ₺</td>
                  <td>
                    @if($order->isDeleted == 2) <a href="" class="btn btn-warning btn-icon-split btn-sm"><span class="text">Beklemede</span></a>
                    @elseif ($order->isDeleted == 0) <a href="" class="btn btn-success btn-icon-split btn-sm"><span class="text">Onaylandı</span></a>
                    @else <a href="" class="btn btn-danger btn-icon-split btn-sm"> <span class="text">Reddedildi</span></a>
                    @endif
                  </td>
                </tr>

            @endforeach
        </tbody>
    </table>
  </div>
</div> </div>

@endsection
