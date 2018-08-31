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
                            <img src='{{asset("img/flags/$country->country_image")}}' alt="">
                        </div>

                        <div class="col-md-9">
                            <h1>COLOMBIA</h1>
                            <ul class="general-info">
                                <li><h6><strong>Foundation:</strong> 1930</h6></li>
                                <li><h6><strong>President:</strong> Juan R.</h6></li>
                                <li><h6><strong>Manager:</strong> Pekerman</h6></li>
                                <li><h6><strong>Total Titles:</strong> 100+</h6></li>
                                <li><h6><strong>Location:</strong> Colombia</h6></li>
                                <li>
                                    <h6>
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                        <a href="https://themeforest.net/user/iwthemes/portfolio?ref=iwthemes" target="_blank">www.site.com</a>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-image-team" style="background:url('../img/countries/{{$country->team_image}}');"></div>
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
                                        <h4>Colombia national football team</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-4">
                                            <img src='{{asset("img/flags/$country->country_image")}}' alt="{{$country->country}}">
                                        </div>

                                        <div class="col-lg-12 col-xl-8">
                                            <p>The Colombia national football team (Spanish: Selección de fútbol de Colombia) represents Colombia in international football competitions and is overseen by the Colombian Football Federation. It is a member of the CONMEBOL and is currently ranked thirteenth in the FIFA World Rankings.[3] The team are nicknamed Los Cafeteros due to the coffee production in their country.</p>

                                            <p>Since the mid-1980s, the national team has been a symbol fighting the country's negative reputation. This has made the sport popular and made the national team a sign of nationalism, pride and passion for many Colombians worldwide.</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- Tab One - overview -->

                            <!-- Tab Two - squad -->
                            <div class="tab-pane" id="squad">
                                <div class="row">

                                    <!-- Item Player -->
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="item-player">
                                            <div class="info-player">
                                                <span class="number-player" style="top: 20px;">
                                                    13
                                                </span>
                                                <h4 style="padding-top: 50px;">
                                                    Cristiano Ronaldo
                                                    <span>Forward</span>
                                                </h4>
                                                <ul>
                                                    <li><strong>BORN:</strong> <span>29 września w Łowiczu</span></li>
                                                    <li><strong>RANKING:</strong> <span>1</span></li>
                                                </ul>
                                            </div>
                                            <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Item Player -->
                                </div>
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
                                                    <h3>1919</h3>
                                                </li>

                                                <li>
                                                    Longest flight
                                                    <h3>252 m</h3>
                                                </li>
                                                <li>
                                                    Concern
                                                    <h3>Schweizerischer Skiverband</h3>
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
                                                <li><p>Trainer <span>Stefan Horngacher</span></p></li>
                                                <li><p>Participants <span>18</span></p></li>
                                                <li><p>Score <span>1213</span></p></li>
                                                <li><p>Generally wins <span>534</span></p></li>
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

                    <!-- Side info single team-->
                    <div class="col-lg-3 padding-top-mini">

                        <div class="panel-box">
                            <div class="titles no-margin">
                                <h4>Presentation</h4>
                            </div>
                            <!-- Locations Video -->
                            <div class="row">
                                <iframe src="https://www.youtube.com/embed/ewjq_csVFDk" class="video"></iframe>
                                <div class="info-panel">
                                    <h4>Season 2017/2018</h4>
                                    <p>FIS Ski Jumping World Cup was the 39th World Cup season in ski jumping for men, the
                                        21st official World Cup season in ski flying, and the 7th for ladies.</p>
                                </div>
                            </div>
                            <!-- End Locations Video -->
                        </div>

                        <!-- Widget Text-->
                        <div class="panel-box">
                            <div class="titles no-margin">
                                <h4>Widget Image</h4>
                            </div>
                            <img src="img/slide/1.jpg" alt="">
                            <div class="row">
                                <div class="info-panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  ut sit amet, consectetur adipisicing elit, labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget Text-->
                    </div>
                    <!-- end Side info single team-->

                </div>
            </div>
        </div>
        <!-- Single Team Tabs -->
@endsection