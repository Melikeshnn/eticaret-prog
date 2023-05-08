@extends('back.layouts.master')
@section('title') Marka @endsection
@section('content')
    <div class="d-flex flex-lg-row flex-column justify-content-around align-items-center px-3">
        <div class="col-12 col-lg-5 border rounded pt-3 mb-3 mb-lg-0">
            <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-end">
                <h4 class="">Marka Ekle</h4>
            </div>
            <form class="d-flex flex-sm-row flex-column align-items-center justify-content-center pb-2" method="POST" action="{{route('back.publisher.store')}}">
                @csrf
                <div class="w-100 d-flex flex-row align-items-center">
                    <label for="publisherName" class="m-0"></label>
                    <input type="text" class="form-control" name="publisherName" id="publisherName" placeholder="Marka ismi...">
                </div>
                <div class="ml-3">
                    <button type="submit" class="btn btn-dark">Ekle</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-5 border rounded pt-3 mb-3 mb-lg-0">
            <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-end">
                <h4 class="">Marka Sil</h4>
            </div>
            @if(count($activePublishers) > 0)
                <form class="d-flex flex-sm-row flex-column align-items-center justify-content-center pb-2"  method="POST" action="{{route('back.publisher.delete')}}">
                    @method('DELETE')
                    @csrf
                    <div class="d-flex flex-sm-row flex-column align-items-center flex-grow-1 m-2 sm-0">
                        <label for="publisher" class="m-2 mr-2 m-sm-0 mr-sm-2">Marka: </label>
                        <select class="publisher " name="publisher" id="publisher">
                            @foreach($activePublishers as $publisher)
                                <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark ml-2">Sil</button>
                </form>
            @else
                {{-- TODO: alert-dark ? alert-warning --}}
                <label class="w-100 alert alert-dark ">Marka yok.</label>
            @endif
        </div>
    </div>
@endsection

@section('customPageCss')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2{
            width: 100% !important;
        }
    </style>
@endsection

@section('customPageJs')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#flash-overlay-modal').modal();
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
            $('.publisher').select2();
        });
    </script>
@endsection
