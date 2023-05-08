@extends('back.layouts.master')
@section('title') Admin Değiştir @endsection
@section('content')
    <div class="d-flex flex-lg-row flex-column justify-content-around align-items-center px-3">
        <div class="col-12 col-lg-5 border rounded pt-3 mb-3 mb-lg-0">
            <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-end">
                <h4 class="">Yeni Admin Tanımla</h4>
                <small style="font-size: 10px;" class="pb-1 font-small">{{count($normalUsers)}} adet kayıt bulundu</small>
            </div>
            <form class="d-flex flex-sm-row flex-column align-items-center justify-content-center pb-2" method="POST" action="{{route('back.superAdmin.changeUserAuthorityPost')}}">
                @csrf
                <input type="hidden" name="type" value="user">
                <div class="d-flex flex-sm-row flex-column align-items-center flex-grow-1 m-2 sm-0">
                    <label for="selectedNormalUser" class="m-2 mr-2 m-sm-0 mr-sm-2">Kullanıcı: </label>
                    <select class="selectedNormalUser " name="selectedNormalUser" id="selectedNormalUser">
                        @foreach($normalUsers as $user)
                            <option value="{{$user->id}}">{{$user->email}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-dark ml-2">Güncelle</button>
            </form>
        </div>
        <div class="col-12 col-lg-5 border rounded pt-3 mb-3 mb-lg-0">
            <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-end">
                <h4 class="">Admin Yetkisi Al</h4>
                <small style="font-size: 10px;" class="pb-1 font-small">{{count($admins)}} adet kayıt bulundu</small>
            </div>
            <form class="d-flex flex-sm-row flex-column align-items-center justify-content-center pb-2"  method="POST" action="{{route('back.superAdmin.changeUserAuthorityPost')}}">
                @csrf
                <input type="hidden" name="type" value="admin">
                <div class="d-flex flex-sm-row flex-column align-items-center flex-grow-1 m-2 sm-0">
                    <label for="selectedAdmin" class="m-2 mr-2 m-sm-0 mr-sm-2">Kullanıcı: </label>
                    <select class="selectedAdmin " name="selectedAdmin" id="selectedAdmin">
                        @foreach($admins as $admin)
                            <option value="{{$admin->id}}">{{$admin->email}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-dark ml-2">Güncelle</button>
            </form>
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
            $('.selectedNormalUser').select2();
            $('.selectedAdmin').select2();
        });
    </script>
@endsection
