@extends('layouts.app')
@section('title') {{$country->country}} @endsection
@section('content')
    <!-- Section Title -->
    <div class="section-title-team">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-md-3">
                            <img src='{{asset("img/flags/$country->country_image")}}' alt="{{$country->country}}">
                        </div>

                        <div class="col-md-9">
                            <h1><text-block row="country"
                                            api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block></h1>
                            <ul class="general-info">
                                <li><h6><strong>Foundation:</strong> <text-block row="foundation"
                                                                                 api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block> </h6></li>
                                <li><h6><strong>Coach:</strong><text-block row="coach"
                                                                           api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block> </h6></li>
                                <li><h6><strong>Location:</strong> <text-block row="country"
                                                                               api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block></h6></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-image-team" style="background:url('../img/countries/{{$country->team_image}}'); background-size:cover; background-repeat: no-repeat; background-position: 50%;"></div>
    </div>
    <!-- End Section Title -->

    <!-- Section Area - Content Central -->
    <section class="content-info">

        <!-- Single Team Tabs -->
        <div class="single-team-tabs">
            <div class="container">
                <div class="row">
                    <!-- Left Content - Tabs and Carousel -->
                    <div class="col-xl-12 col-md-12">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
                            <li><a href="#squad" data-toggle="tab">Squad</a></li>
                            <li><a href="#stats" data-toggle="tab">Stats</a></li>
                        </ul>
                        <!-- End Nav Tabs -->
                    </div>

                    <div class="col-lg-9 padding-top-mini">
                        <!-- Content Tabs -->
                        <div class="tab-content">
                            <!-- Tab One - overview -->
                            <div class="tab-pane active" id="overview">

                                <div class="panel-box padding-b">
                                    <div class="titles">
                                        <h4>Norway</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-4">
                                            <img src='{{asset("img/flags/$country->country_image")}}' alt="{{$country->country}}">
                                        </div>

                                        <div class="col-lg-12 col-xl-8 pre-line margin-top-minus-20" style="font-size: 16px; font-family: 'Maven Pro',sans-serif;">
                                            {{$country->description}}
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- Tab One - overview -->

                            <!-- Tab Two - squad -->
                            <div class="tab-pane" id="squad">
                                <player_cards api_link='@php echo getenv('APP_URL')."/api/player_show_by_country/$id" @endphp'></player_cards>
                            </div>
                            <!-- End Tab Two - squad -->

                            <!-- Tab Theree - stats -->
                            <div class="tab-pane" id="stats">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="stats-info">
                                            <ul>
                                                <li>
                                                    Foundation
                                                    <h3><text-block row="foundation"
                                                                    api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block></h3>
                                                </li>

                                                <li>
                                                    Longest flight
                                                    <h3><text-block row="flight"
                                                                    api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block></h3>
                                                </li>
                                                <li>
                                                    Concern
                                                    <h3><text-block row="concern"
                                                                    api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block></h3>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-xl-4" style="margin-left: auto; margin-right: auto;">
                                        <!-- Attack -->
                                        <div class="panel-box">
                                            <div class="titles no-margin">
                                                <h4><i class="fa fa-calendar"></i>Info</h4>
                                            </div>
                                            <ul class="list-panel">
                                                <li><p>Trainer <span><text-block row="coach"
                                                                                 api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block></span></p></li>
                                                <li><p>Participants <span><text-block row="players"
                                                                                      api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block></span></p></li>
                                                <li><p>Score <span><text-block row="score"
                                                                               api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block></span></p></li>
                                                <li><p>Generally wins <span><text-block row="wins"
                                                                                        api_link='@php echo getenv('APP_URL')."/api/countries_show/$id" @endphp'></text-block></span></p></li>
                                            </ul>
                                        </div>
                                        <!-- End Attack -->
                                    </div>
                                </div>

                            </div>
                            <!-- End Tab Theree - stats -->
                        </div>
                        <!-- Content Tabs -->
                    </div>

                    @include('components.sidebar')
                    <!-- end Side info single team-->

                </div>
            </div>
        </div>
        <!-- Single Team Tabs -->
@endsection