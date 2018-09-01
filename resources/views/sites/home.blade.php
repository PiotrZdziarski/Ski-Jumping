@extends('layouts.app')
@section('title')Ski Jumping @endsection
@section('content')

    <hero-slider api_link="@php echo getenv('APP_URL').'/api/newscount/2' @endphp"></hero-slider>

    <!-- Section Area - Content Central -->
    <section class="content-info">
        <!-- Dark Home -->
        <div class="dark-home">
            <div class="container">
                <div class="row">
                    <!-- Left Content - Tabs and Carousel -->
                    <div class="col-xl-9 col-md-12">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#statistics" data-toggle="tab">STATISTICS</a></li>
                            <li><a href="#description" data-toggle="tab">DESCRIPTION</a></li>
                        </ul>
                        <!-- End Nav Tabs -->

                        <!-- Content Tabs -->
                        <div class="tab-content">
                            <!-- Tab Theree - statistics -->
                            <div class="tab-pane active" id="statistics">
                                <div class="row">
                                    <!-- Club Ranking -->
                                    <div class="col-lg-4">
                                        <div class="club-ranking">
                                            <h5><a href="group-list.html">Nations Cup</a></h5>
                                            <div class="info-ranking">
                                                <list database="countries"
                                                      api_link="@php echo getenv('APP_URL').'/api/countriescount/8' @endphp"></list>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Club Ranking -->

                                    <!-- recent-results -->
                                    <div class="col-lg-4">
                                        <div class="recent-results">
                                            <h5><a href="group-list.html">Recent Result</a></h5>
                                            <div class="info-results">
                                                <list database="events"
                                                      api_link="@php echo getenv('APP_URL').'/api/eventscount/3' @endphp"></list>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end recent-results -->

                                    <!-- Top player -->
                                    <div class="col-lg-4">
                                        <div class="player-ranking">
                                            <h5><a href="group-list.html">Individual</a></h5>
                                            <div class="info-player">
                                                <list database="players"
                                                      api_link="@php echo getenv('APP_URL').'/api/playerscount/8' @endphp"></list>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Top player -->
                                </div>
                            </div>
                            <!-- Tab Theree - statistics -->
                            <!-- End Tab One - Groups List -->

                            <!-- Tab Two - Destinations -->
                            <div class="tab-pane" id="description">
                                <div class="info-general">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/locations/fiscup.jpg" alt="">
                                        </div>

                                        <div class="col-md-8">
                                            <h3>FIS Cup 2017/2018</h3>
                                            <p class="lead">
                                                The 39th season of the Men's World Cup in ski jumping. In the schedule,
                                                which was approved in May 2017 at the FIS congress in Portorož, there
                                                were 23 individual competitions (including 5 in ski flights) and 8 team
                                                competitions (including 2 in ski flights).

                                            </p>
                                        </div>

                                        <div class="col-md-12">
                                            <p>It started on November 18 2017 on the hill Adam Malysz in Wisła, and
                                                ended March 25, 2018 at Letalnica in Slovenian Planica. In the framework
                                                of the World Cup 2017/2018 for the first time plans for Willingen Five
                                                and Planica 7 were planned. In addition, the rules tested during the
                                                Summer Grand Prix were introduced for the first time, according to which
                                                all competitors are required to take part in qualifying and take place
                                                there among the top 50 jumpers (40 in the case of ski flying
                                                competition). The jumpers taking the place in the top ten of the general
                                                classification of the World Cup thus lost their starting position in the
                                                main competition.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab Two - Destinations -->
                        </div>
                        <!-- Content Tabs -->
                    </div>
                    <!-- Left Content - Tabs and Carousel -->

                    <!-- Right Content - Content Counter -->
                    <div class="col-xl-3 col-md-12">
                        <div class="counter-home-wraper">
                            <div class="title-color text-center">
                                <h4>FIS Cup 2018/2019</h4>
                            </div>

                            <div class="content-counter content-counter-home">
                                <p class="text-center">
                                    <i class="fa fa-clock-o"></i>
                                    Countdown Till Start
                                </p>
                                <div id="event-one" class="counter"></div>
                                <ul class="post-options">
                                    <li><i class="fa fa-calendar"></i>17 November, 2018</li>
                                    <li><i class="fa fa-clock-o"></i>Kick-of, 4:00 PM</li>
                                </ul>

                                <div class="list-groups">
                                    <div class="row align-items-center">

                                        <div class="col-md-12">
                                            <h4>Adam Małysz Hill in Wisła, Poland</h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content Counter -->
                    </div>
                    <!-- End Right Content - Content Counter -->
                </div>
            </div>
        </div>
        <!-- Dark Home -->

        <!-- Content Central -->
        <div class="container padding-top">
            <div class="row">

                <!-- content Column Left -->
                <div class="col-lg-6 col-xl-7">
                    <!-- Recent Post -->
                    <recent-news api_link="@php echo getenv('APP_URL').'/api/newscount/4' @endphp"></recent-news>
                    <!-- End Recent Post -->

                    <!-- Experts -->
                    <div class="panel-box">
                        <div class="titles">
                            <h4>Best Ski Jumpers</h4>
                        </div>

                        <list type_name="card" database="players"
                              api_link="@php echo getenv('APP_URL').'/api/playerscount/6' @endphp"></list>
                    </div>
                    <!-- End Experts -->
                </div>
                <!-- End content Left -->

                @include('components.sidebar')

                <!-- content Sidebar Right -->
                <aside class="col-sm-6 col-lg-3 col-xl-2">
                    <!-- Diary -->
                    <div class="panel-box">
                        <div class="titles">
                            <h4><i class="fa fa-calendar"></i>Events</h4>
                        </div>

                        <ul class="list-diary">
                            <list database="events" type_name="diary"
                                  api_link="@php echo getenv('APP_URL').'/api/eventscount/3' @endphp"></list>
                        </ul>
                    </div>
                    <!-- End Diary -->

                    <!-- Adds Sidebar -->
                    <div class="panel-box">
                        <a href="https://en.wikipedia.org/wiki/Frost" target="_blank">
                            <img src="{{asset('img/testimonials/sidebar2.png')}}" class="img-responsive" alt="">
                        </a>
                    </div>
                    <!-- End Adds Sidebar -->
                </aside>
                <!-- End content Sidebar Right -->

            </div>
        </div>
        <!-- End Content Central -->

    </section>
    <!-- End Section Area -  Content Central -->


    <div class="content-instagram">
        <div id="instafeed"></div>
    </div>
@endsection