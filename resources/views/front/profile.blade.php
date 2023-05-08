@extends('front.layouts.master')
@section('title') Profil @endsection
@section('content')
<div class="container">
    <div class="main-body">
       
          <div class="row gutters-sm">
            <div class="col-md-12 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{auth()->user()->name}} {{auth()->user()->surname}}</h4>
                      <p class="text-secondary mb-1">{{auth()->user()->type}}</p>
                      <p class="text-muted font-size-sm">{{auth()->user()->email}}</p>
                      
                      @if(Auth::user()->type == 'user' && Auth::user()->isDeleted == 0)
                      <button class="btn btn-danger"><a href="{{route('front.user.updateStatus', ['id' => auth()->user()->id, 'isDeleted' => 1])}}" style="color: white">Hesabı Dondur</a></button>
                      @elseif(Auth::user()->type == 'user' && Auth::user()->isDeleted == 1)
                      <button class="btn btn-success"><a href="{{route('front.user.updateStatus',['id' => auth()->user()->id, 'isDeleted' => 0])}}" style="color: white">Hesabı Aktif Et</a></button>
                      @endif
                      
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-12">
              <div class="card5 mb-3">
                <div class="card-body" id="show_1" style="display: block">
                  <div class="row" style="margin: 0 auto; display: block;">
                    <div class="col-sm-3">
                      <h6 class="mb-0">İsim</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row" style="margin: 0 auto; display: block;">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Soyisim</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->surname}}
                    </div>
                  </div>
                  <hr>
                  <div class="row" style="margin: 0 auto; display: block;">
                    <div class="col-sm-3">
                      <h6 class="mb-0">E-mail</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{auth()->user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row" style="margin: 0 auto; display: block;">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Şifre</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      *******
                    </div>
                  </div>
                  <hr>
                  <div class="row" style="margin: 0 auto; display: block;">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Şifre Tekrar</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        *******
                    </div>
                  </div>
                  <hr>
                  <div class="row" style="margin: 0 auto; display: block;">
                    <div class="col-sm-12">
                      <a class="btn btn-primary " style="color: #fff" target="__blank" onclick="switch_div(2);">Düzenle</a>
                    </div>
                  </div>
                </div>
                
                <form style="" method="POST" action="{{route('front.user.update',auth()->user()->id)}}" enctype="multipart/form-data">
                  @csrf
                <div class="card-body" id="show_2" style="display: none">
                    <div class="row mb-3" style="margin: 0 auto; display: block;">
                        <div class="col-sm-3">
                            <h6 class="mb-0">İsim</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" name="name" id="name" value="{{auth()->user()->name}}">
                        </div>
                    </div>
                    <div class="row mb-3" style="margin: 0 auto; display: block;">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Soyisim</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" name="surname" id="surname" value="{{auth()->user()->surname}}">
                        </div>
                    </div>
                    <div class="row mb-3" style="margin: 0 auto; display: block;">
                        <div class="col-sm-3">
                            <h6 class="mb-0">E-mail</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" name="email" id="email" value="{{auth()->user()->email}}">
                        </div>
                    </div>
                    <div class="row mb-3" style="margin: 0 auto; display: block;">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Şifre</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" name="newpass1" required id="newpass1" placeholder="Şifre">
                        </div>
                    </div>
                    <div class="row mb-3" style="margin: 0 auto; display: block;">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Şifre Tekrar</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" name="newpass2" required id="newpass2" placeholder="Şifre tekrar">
                        </div>
                    </div>
                    <div class="row" style="margin: 0 auto; display: block;">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <input type="submit" class="btn btn-success px-4" value="Kaydet">
                            <input type="button" class="btn btn-primary px-4" onclick="switch_div(1)" value="Geri">
                        </div>
                    </div>
                </div>
              </form>
              </div>

            </div>
          </div>

        </div>
    </div>
@endsection

@section('customPageCss')
<link href="{{asset('front/css/profile.css')}}" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
    .main-body {
        padding: 15px;
    }
    .card5 {
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
    }
    
    .card5 {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }
    
    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }
    
    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }
    
    .gutters-sm>.col, .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3, .my-3 {
        margin-bottom: 1rem!important;
    }
    
    .bg-gray-300 {
        background-color: #e2e8f0;
    }
    .h-100 {
        height: 100%!important;
    }
    .shadow-none {
        box-shadow: none!important;
    }
    
    </style>
@endsection

@section('customPageJs')
<script>
    function switch_div(show) {  
  document.getElementById("show_"+show).style.display = "block";
  document.getElementById("show_"+((show==1)?2:1)).style.display = "none";
} 
</script>

@endsection