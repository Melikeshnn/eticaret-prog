@extends('back.layouts.master')
@section('title') Slider @endsection
@section('content')
    <div class="d-flex flex-column">
        <div class="d-flex flex-row justify-content-between align-items-center px-2 pb-1 font-weight-bold" style="border-bottom: 0.01rem solid #5a5c6930!important;">
            <label class="mr-2 d-md-block d-none">#</label>
            <div class="d-none d-md-flex flex-md-grow-1 flex-md-row justify-content-md-between align-items-md-center">
                <label style="width: 30%">Slider Ana Metni</label>
                <label style="width: 30%; text-align: center;">Slider İkinci Metni</label>
                <label style="width: 30%; text-align: center;">Slider Buton Linki</label>
                <label style="width: 10%; text-align: end;"></label>
            </div>
        </div>
        <div>
            <div class="d-flex flex-column px-2 pt-2" style="border-bottom: 0.01rem solid #5a5c6930!important;">
                @foreach($sliderImages as $sliderImage)
                    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start align-items-center" style="border-bottom: 0.01rem solid #5a5c6930!important;">
                        <label class="mr-2 text-center" >{{$sliderImage->id}}</label>
                        <div class="d-flex flex-md-grow-1 flex-md-row flex-column justify-content-md-between align-items-center">
                            <label class="sliderLabel">{!! $sliderImage->sliderMainText !!}</label>
                            <label class="sliderLabel text-center" >{!! $sliderImage->sliderSubText !!}</label>
                            <label class="sliderLabel text-center" ><a href="{{$sliderImage->sliderButtonLink}}">{!! $sliderImage->sliderButtonLink !!}</a></label>
                            <label style="width: 10%; text-align: end;">
                                <a href="{{route('back.slider.update.index', $sliderImage->id)}}" class="p-1 btn btn-dark"><i class="far fa-eye" style="font-size: 14px;"></i></a>
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('customPageCss')
    <style>
        @media (min-width: 768px) { .sliderLabel{width: 30%;} }
        @media (max-width: 768px) { .sliderLabel{width: 100%;} }
    </style>
@endsection
