<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: black;">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-text mx-3">OUTLAND Panel<sub>V1</sub></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @if(Request::segment(1) == 'admin' && !Request::segment(2)) active @endif ">
            <a class="nav-link" href="{{route('back.dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Ana sayfa</span></a>
        </li>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('front.mainpage')}}">
                <i class="fas fa-store"></i>
                <span>Alışveriş Ana sayfa</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">Ürün Yönetimi</div>

        <li class="nav-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'urunler' && !Request::segment(3)) active @endif">
            <a class="nav-link" href="{{route('back.products.index')}}">
                <i class="fas fa-shopping-cart"></i>
                <span>Ürün Listesi</span>
            </a>
        </li>


        <li class="nav-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'urun' && Request::segment(3) == 'ekle') active @endif">
            <a class="nav-link" href="{{route('back.products.store.index')}}">
                <i class="fas fa-plus"></i>
                <span>Ürün Ekle</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            İçerik Yönetimi
        </div>

        <li class="nav-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'yayinci') active @endif">
            <a class="nav-link" href="{{route('back.publisher')}}">
                <i class="fas fa-cloud"></i>
                <span>Marka</span>
            </a>
        </li>

        <li class="nav-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'tur') active @endif">
            <a class="nav-link" href="{{route('back.kind.index')}}">
                <i class="fas fa-indent"></i>
                <span>Kategori</span>
            </a>
        </li>

        <li class="nav-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'slider') active @endif">
            <a class="nav-link" href="{{route('back.slider.index')}}">
                <i class="fas fa-image"></i>
                <span>Slider</span>
            </a>
        </li>

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link @if(Request::segment(1) == 'sliderr') in @else collapsed @endif" href="#"--}}
{{--               data-toggle="collapse" data-target="#collapseThree"--}}
{{--               aria-expanded="true" aria-controls="collapseThree">--}}
{{--                <i class="fas fa-image"></i>--}}
{{--                <span>Slider</span>--}}
{{--            </a>--}}
{{--            <div id="collapseThree"--}}
{{--                 class="collapse @if(Request::segment(1) == 'admin' && Request::segment(2) == 'sliderr') show @endif"--}}
{{--                 aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
{{--                <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                    <h6 class="collapse-header">Slider İşlemleri</h6>--}}
{{--                    <a class="collapse-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'sliderr' && !Request::segment(3)) text-dark active @endif"--}}
{{--                       href="{{route('back.slider.index')}}">Slider Resimleri</a>--}}
{{--                    <a class="collapse-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'sliderr' && Request::segment(3) == 'ekle') text-dark active @endif"--}}
{{--                       href="{{route('back.slider.store.index')}}">Slider Ekle</a>--}}
{{--                    <a class="collapse-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'sliderr' && Request::segment(3) == 'sil') active @endif"--}}
{{--                       href="{{route('back.slider.index')}}">Slider Sil</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Site Ayarları
        </div>

        <!-- Nav Item - Tables -->
        @if(Auth::user()->type === 'superadmin')
            <li class="nav-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'kullanici-yetki-degistir') active @endif">
                <a class="nav-link" href="{{route('back.superAdmin.changeUserAuthority')}}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Admin Tanımla</span></a>
            </li>
            <li class="nav-item @if(Request::segment(1) == 'admin' && Request::segment(2) == 'kullanici-rol-degistir') active @endif">
                <a class="nav-link" href="{{route('back.superAdmin.changeUserActivePassive')}}">
                    <i class="fas fa-user-cog"></i>
                    <span>Kullanıcı Düzenle</span></a>
            </li>
    @endif

    <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-cog"></i>
                <span>Ayarlar</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" href="{{asset('back/img')}}/undraw_profile_1.svg"
                                         alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.
                                    </div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" href="{{asset('back/img')}}/undraw_profile_2.svg"
                                         alt="">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?
                                    </div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" href="{{asset('back/img')}}/undraw_profile_3.svg"
                                         alt="">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!
                                    </div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                         alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...
                                    </div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Çıkış Yap
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>

            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
@include('flash::message')
