<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- plugins:css -->
<link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.addons.css')}}">
<!-- endinject -->
<!-- plugin css for this page -->
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="{{asset('assets/css/horizontal-layout/style.css')}}">
<!-- endinject -->
<!-- <link rel="shortcut icon" href="{asset('assets/images/favicon.png')}"> -->

<!-- plugin css for this page -->
<link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}" />

@stack('css')