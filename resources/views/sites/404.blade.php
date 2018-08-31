@extends('layouts.app')
@section('title') 404 @endsection
@section('content')
<section class="container">
    <div class="row">
        <div class="page-error">
            <h1>404 <i class="fa fa-unlink"></i></h1>
            <hr class="tall">
            <p class="lead">We're sorry, but the page you were looking for doesn't exist.</p>
            <a href="{{url('/')}}" class="btn btn-lg btn-primary">Return Home</a>
        </div>
    </div>
</section>
@endsection
