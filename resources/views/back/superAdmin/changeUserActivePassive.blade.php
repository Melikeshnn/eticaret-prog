@extends('back.layouts.master')
@section('title') Kullanıcı Düzenle @endsection
@section('content')

<form method="GET" action="{{route('back.user.search')}}">
    <div class="input-group">
        <input type="text" style="color: black;" class="form-control" placeholder="Aranacak ismi giriniz."
               aria-label="User Name" name="name" id="name">
        <div class="input-group-append">
            <button class="btn btn-sm btn-primary" style="margin-left: 14px" type="submit">Ara</button>
        </div>
    </div>
</form><br>

<div class="limiter">
    <div class="d-flex justify-content-center shadow">
        <div class="wrap-table100">
            <div class="table">

                <div class="row header">
                    <div class="cell">
                        Ad
                    </div>
                    <div class="cell">
                        Soyad
                    </div>
                    <div class="cell">
                        E-mail
                    </div>
                    <div class="cell">
                        Rol
                    </div>
                    <div class="cell">
                        Durum
                    </div>
                    <div class="cell" style="padding-left: 25px">
                        
                    </div>
                    <div class="cell" style="padding-left: 25px">
                        
                    </div>
                </div>

                @foreach($users as $user)
                    <div class="row">
                        <div class="cell" data-title="Adı">
                            {{$user->name}}
                        </div>
                        <div class="cell" data-title="Soyadı">
                            {{$user->surname}}
                        </div>
                        <div class="cell" data-title="Email">
                            {{$user->email}}
                        </div>
                        <div class="cell" data-title="Email">
                            {{$user->type}}
                        </div>
                        <div class="cell" data-title="Durum">
                            @if(!$user->isDeleted) <label class="btn btn-success"><a href="{{route('back.superAdmin.changeUserActivePassivePost', ['id' => $user->id, 'isDeleted' => 1])}}" style="color: white">Aktif</a></label> 
                            @else <label class="btn btn-danger"><a href="{{route('back.superAdmin.changeUserActivePassivePost',['id' => $user->id, 'isDeleted' => 0])}}" style="color: white">Pasif</a></label> @endif
                        </div>
                        <div class="cell" data-title="Düzenle" style="padding-left: 20px">
                            <button class="btn btn-primary"><a href="{{route('back.user.updateIndex', $user->id)}}" style="color: white">Düzenle</a></button>
                        </div>
                        <div class="cell" data-title="Sil" style="padding-left: 20px">
                            <button class="btn btn-danger"><a href="{{route('back.user.delete', $user->id)}}" style="color: white">Sil</a></button>
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
