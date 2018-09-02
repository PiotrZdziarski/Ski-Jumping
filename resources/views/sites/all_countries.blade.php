@extends('layouts.app')
@section('title') Countries @endsection
@section('content')
    <!-- Section Title -->
    <div class="section-title" style="background:url(img/slide/1.jpg); background-position-y: 50%;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Countries list</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Title -->

    <all_countries api_link="@php echo getenv('APP_URL').'/api/countries/score' @endphp"></all_countries>
@endsection