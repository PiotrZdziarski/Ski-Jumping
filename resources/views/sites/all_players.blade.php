@extends('layouts.app')
@section('title') Ski Jumpers @endsection
@section('content')
    <!-- Section Area - Content Central -->
    <!-- Section Title -->
    <div class="section-title" style="background:url(img/slide/1.jpg); background-position-y: 50%;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Ski Jumpers List</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Title -->
    <all_players api_link="@php echo getenv('APP_URL').'/api/players' @endphp"></all_players>
@endsection