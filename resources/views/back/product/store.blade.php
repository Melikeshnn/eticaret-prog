@extends('back.layouts.master')
@section('title') Ürün Ekle @endsection
@section('content')
    <div class=" d-flex flex-column justify-content-center align-items-center">

        @if ($errors->any())
            <div class="w-50 ">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <form class="w-50" method="POST" action="{{route('back.products.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gameName">Ürün İsmi</label>
                <input type="text" name="gameName" id="gameName" value="{{old('gameName')}}" placeholder="" class="form-control w-100"/>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <div class="form-group w-50 pr-3">
                    <label for="publisher">Marka:</label>
                    <select class="publisher" name="publisher" id="publisher">
                        @foreach($publishers as $publisher)
                            <option @if(old('publisher') == $publisher->id) selected @endif value="{{$publisher->id}}">{{$publisher->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group w-50 pl-3">
                    <label for="kind">Tür:</label>
                    <select class="kind" name="kind" id="kind">
                        @foreach($kinds as $kind)
                            <option @if(old('kind') == $kind->id) selected @endif value="{{$kind->id}}">{{$kind->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <div class="form-group pr-3">
                    <label for="price">Fiyat:</label>
                    <input type="number" name="price" id="price" value="{{old('price')}}" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="discount">İndirim (%):</label>
                    <input type="number" name="discount" id="discount" value="{{old('discount')}}" class="form-control"/>
                </div>
                <div class="form-group pl-3">
                    <label for="stock">Stok</label>
                    <input type="number" name="stock" id="stock" value="{{old('stock')}}" class="form-control"/>
                </div>
            </div>
            <div class="form-group d-flex flex-column ">
                <label for="">Platform</label>
                <div class="form-group d-flex flex-row justify-content-between align-items-center ">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="isGiyim" id="isGiyim" class="form-check-input" @if(old('isGiyim')) checked @endif value="isGiyim">Giyim & Ayakkabı
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="isKamp" id="isKamp" class="form-check-input" @if(old('isKamp')) checked @endif value="isKamp">Kamp & Dağcılık
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="isTrek" id="isTrek" class="form-check-input" @if(old('isTrek')) checked @endif value="isTrek">Doğa Sporları
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="descriptionHead">Açıklama Başlığı</label>
                <input type="text" name="descriptionHead" id="descriptionHead" value="{{old('descriptionHead')}}" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="description">Açıklama</label>
                <textarea id="description" name="description">{{old('description')}}</textarea>
            </div>

            <div class="form-group">
                <label for="systemRequirementsText">Ürün Özellikleri</label>
                <textarea id="systemRequirementsText" name="systemRequirementsText">{{old('systemRequirementsText')}}</textarea>
            </div>

            <div class="form-group">
                <label for="coverImage">Kapak Resmi</label>
                <input type="file" name="coverImage" class="form-control">
            </div>

            <div class="form-group">
                <label for="images">Resimler</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>

            <button type="submit" class="btn btn-dark btn-block mb-3">EKLE</button>

        </form>
    </div>
@endsection
@section('customPageCss')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <style>
        .select2 {
            width: 100% !important;
        }
    </style>
@endsection

@section('customPageJs')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#flash-overlay-modal').modal();
            $('div.alert').not('.alert-important').delay(6500).fadeOut(350);
            $('.publisher').select2();
            $('.kind').select2();

            $('#description').summernote({
                tabsize: 2,
                height: 150,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['color', ['color']],
                ]
            });

            $('#systemRequirementsText').summernote({
                tabsize: 2,
                height: 150,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['color', ['color']],
                ]
            });

        });
    </script>
@endsection
