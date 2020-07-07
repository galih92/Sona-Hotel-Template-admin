<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Hotel | Sona</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('view/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('view/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('view/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('view/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('view/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('view/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('view/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('view/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('view/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('view/css/style.css')}}" type="text/css">
</head>
<body>
   @yield('styles')
   <!-- Header -->
   @include('layout.user.navbar')
   <!-- End Header -->

   @yield('content')

   <!-- Footer -->
   @include('layout.user.footer')
   <!-- End Footer -->
</body>
<!-- Js Plugins -->
<script src="{{asset('view/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('view/js/bootstrap.min.js')}}"></script>
<script src="{{asset('view/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('view/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('view/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('view/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('view/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('view/js/main.js')}}"></script>
</html>