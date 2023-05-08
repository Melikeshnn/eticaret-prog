<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title', config('global.siteTitle'))</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//tags -->
    <link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('front/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/easy-responsive-tabs.css')}}" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="icon" href="{{asset('front/images')}}/favicon64.png" type="image/x-icon">
    @yield('customPageCss')
</head>
<body>
