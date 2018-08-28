<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="SportsCup - Bootstrap 4 Theme for Soccer And Sports">
    <meta name="author" content="iwthemes.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Theme CSS -->
    <link href="{{url('css/main.css')}}" rel="stylesheet" media="screen">

    <!-- ICON -->
    <link rel="icon" href="{{asset('img/icon.png')}}">


    <!-- Favicons -->
    <link rel="shortcut icon" href="img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">
</head>

<body>

<!-- layout-->
<div id="layout">
    @include('components.header')
    @include('components.navbar')

@yield('content')

@include('components.footer')

</div>
<!-- End layout-->

<!-- ======================= JQuery libs =========================== -->
<!-- Vue and others-->
<script type="text/javascript" src="{{url('js/app.js')}}" defer></script>
<!-- jQuery local-->
<script type="text/javascript" src="{{url('js/jquery.js')}}" defer></script>
<!-- popper.js-->
<script type="text/javascript" src="{{url('js/popper.min.js')}}" defer></script>
<!-- bootstrap.min.js-->
<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"defer></script>
<!-- required-scripts.js-->
<script type="text/javascript" src="{{url('js/theme-scripts.js')}}"defer></script>
<!-- theme-main.js-->
<script type="text/javascript" src="{{asset('js/theme-main.js')}}" defer></script>
<!-- ======================= End JQuery libs =========================== -->

</body>
</html>