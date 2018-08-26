<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <title@yield('title')</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="SportsCup - Bootstrap 4 Theme for Soccer And Sports">
    <meta name="author" content="iwthemes.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Theme CSS -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="screen">

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
<!-- jQuery local-->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<!-- popper.js-->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<!-- bootstrap.min.js-->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- required-scripts.js-->
<script type="text/javascript" src="{{asset('js/theme-scripts.js')}}"></script>
<!-- theme-main.js-->
<script type="text/javascript" src="{{asset('js/theme-main.js')}}"></script>
<!-- ======================= End JQuery libs =========================== -->

</body>
</html>