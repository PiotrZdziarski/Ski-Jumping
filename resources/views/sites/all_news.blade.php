@extends('layouts.app')
@section('title') News @endsection
@section('content')
    <!-- Section Area - Content Central -->
    <section class="content-info">

        <div class="container paddings-mini">
            <div class="row">

                @include('components.sidebar')


                <div class="col-lg-9">
                    <recent-news api_link="@php echo getenv('APP_URL').'/api/news' @endphp"></recent-news>
                </div>
            </div>
        </div>
@endsection