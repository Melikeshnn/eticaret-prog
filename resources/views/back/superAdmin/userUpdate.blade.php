@extends('back.layouts.master')
@section('title') Kullanıcı Düzenle @endsection
@section('content')

<a href="{{route('back.superAdmin.changeUserActivePassive')}}" class="btn btn-dark"><i class="fas fa-angle-left"></i></a>

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

        <form class="w-50" method="POST" action="{{route('back.user.update')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="userId" value="{{$users->id}}"/>
            <div class="form-group">
                <label for="name">Ad</label>
                <input type="text" name="name" id="name" value="{{$users->name}}" required placeholder="" class="form-control w-100"/>
            </div>
            <div class="form-group">
                <label for="surname">Soyad</label>
                <input type="text" name="surname" id="surname" value="{{$users->surname}}" required placeholder="" class="form-control w-100"/>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" value="{{$users->email}}" placeholder="" required class="form-control w-100"/>
            </div>
            <div class="form-group">
                <label for="newpass1">Şifre</label>
                <input type="text" name="newpass1" id="newpass1" value="" placeholder="" required class="form-control w-100"/>
            </div>
            <div class="form-group">
                <label for="newpass2">Şifre Tekrar</label>
                <input type="text" name="newpass2" id="newpass2" value="" placeholder="" required class="form-control w-100"/>
            </div>

            <button type="submit" class="btn btn-dark btn-block mb-3">GÜNCELLE</button>

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
