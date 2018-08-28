@extends('layouts.app')
@section('title')Ski Jumping @endsection
@section('content')
    <!-- section-hero-posts-->
    <div class="hero-header">
        <!-- Hero Slider-->
        <div id="hero-slider" class="hero-slider">

            <!-- Item Slide-->
            <div class="item-slider" style="background:url(img/slide/3.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="info-slider">
                                <h1>Group Stage Breakdown</h1>
                                <p>While familiar with fellow European nation France, Hareide admits that South American
                                    side Peru.</p>
                                <a href="#" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item Slide-->

            <!-- Item Slide-->
            <div class="item-slider" style="background:url(img/slide/2.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="info-slider">
                                <h1>World Cup rivalries reprised</h1>
                                <p>The outdoor exhibition on Manezhnaya Square comprises 11 figures that symbolise the
                                    main sites of interest.</p>
                                <a href="#" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item Slide-->

            <!-- Item Slide-->
            <div class="item-slider" style="background:url(img/slide/1.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="info-slider">
                                <h1>Group Stage Breakdown</h1>
                                <p>While familiar with fellow European nation France, Hareide admits that South American
                                    side Peru.</p>
                                <a href="#" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item Slide-->

        </div>
        <!-- End Hero Slider-->
    </div>
    <!-- End section-hero-posts-->

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
                                                The 39th season of the Men's World Cup in ski jumping. In the schedule, which was approved in May 2017 at the FIS congress in Portorož, there were 23 individual competitions (including 5 in ski flights) and 8 team competitions (including 2 in ski flights).

                                            </p>
                                        </div>

                                        <div class="col-md-12">
                                            <p>It started on November 18 2017 on the hill Adam Malysz in Wisła, and ended March 25, 2018 at Letalnica in Slovenian Planica. In the framework of the World Cup 2017/2018 for the first time plans for Willingen Five and Planica 7 were planned. In addition, the rules tested during the Summer Grand Prix were introduced for the first time, according to which all competitors are required to take part in qualifying and take place there among the top 50 jumpers (40 in the case of ski flying competition). The jumpers taking the place in the top ten of the general classification of the World Cup thus lost their starting position in the main competition.</p>
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
                    <div class="panel-box">

                        <div class="titles">
                            <h4>Recent News</h4>
                        </div>

                        <!-- Post Item -->
                        <div class="post-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-hover">
                                        <img src="img/blog/1.jpg" alt="" class="img-responsive">
                                        <div class="overlay"><a href="single-news.html">+</a></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5><a href="single-news.html">Group Stage Breakdown</a></h5>
                                    <span class="data-info">January 3, 2014  / <i class="fa fa-comments"></i><a
                                                href="#">0</a></span>
                                    <p>While familiar with fellow European nation France, Hareide admits that South
                                        American side Peru.<a href="single-news.html">Read More [+]</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Post Item -->

                        <!-- Post Item -->
                        <div class="post-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-hover">
                                        <img src="img/blog/2.jpg" alt="" class="img-responsive">
                                        <div class="overlay"><a href="single-news.html">+</a></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5><a href="single-news.html">Russia 2018’s potential classic match-ups</a></h5>
                                    <span class="data-info">January 9, 2014  / <i class="fa fa-comments"></i><a
                                                href="#">5</a></span>
                                    <p>Our goal is very clear, it didn’t change after the draw. We should qualify for
                                        the knockout stage.<a href="single-news.html">Read More [+]</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Post Item -->

                        <!-- Post Item -->
                        <div class="post-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-hover">
                                        <img src="img/blog/3.jpg" alt="" class="img-responsive">
                                        <div class="overlay"><a href="single-news.html">+</a></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5><a href="single-news.html">World Cup rivalries reprised</a></h5>
                                    <span class="data-info">January  4, 2014  / <i class="fa fa-comments"></i><a
                                                href="#">3</a></span>
                                    <p>The outdoor exhibition on Manezhnaya Square comprises 11 figures that symbolise
                                        the main sites of interest.<a href="single-news.html">Read More [+]</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Post Item -->

                        <!-- Post Item -->
                        <div class="post-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-hover">
                                        <img src="img/blog/4.jpg" alt="" class="img-responsive">
                                        <div class="overlay"><a href="single-news.html">+</a></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h5><a href="single-news.html">All set for your trip to Russia?</a></h5>
                                    <span class="data-info">January 8, 2014  / <i class="fa fa-comments"></i><a
                                                href="#">2</a></span>
                                    <p>Colombia play Japan on 19 June at the Mordovia Arena, where the piling and
                                        casting operations.<a href="single-news.html">Read More [+]</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Post Item -->
                    </div>
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

                <!-- content Sidebar Center -->
                <aside class="col-sm-6 col-lg-3 col-xl-3">
                    <!-- Locations -->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Locations</h4>
                        </div>
                        <!-- Locations Carousel -->
                        <ul class="single-carousel">
                            <li>
                                <img src="img/locations/1.jpg" alt="" class="img-responsive">
                                <div class="info-single-carousel">
                                    <h4>Saint Petersburg</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo cillum dolore eu fugiat nulla sit amet,
                                        consectetur adipisicing elit, pariatur.</p>
                                </div>
                            </li>
                            <li>
                                <img src="img/locations/2.jpg" alt="" class="img-responsive">
                                <div class="info-single-carousel">
                                    <h4>Ekaterinburg</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo cillum dolore eu fugiat nulla
                                        pariatur.</p>
                                </div>
                            </li>
                            <li>
                                <img src="img/locations/3.jpg" alt="" class="img-responsive">
                                <div class="info-single-carousel">
                                    <h4>Nizhny Novgorod</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo cillum dolore eu fugiat nulla
                                        pariatur.</p>
                                </div>
                            </li>
                        </ul>
                        <!-- Locations Carousel -->
                    </div>
                    <!-- End Locations -->

                    <!-- Video presentation -->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Presentation</h4>
                        </div>
                        <!-- Locations Video -->
                        <div class="row">
                            <iframe src="https://www.youtube.com/embed/AfOlAUd7u4o" class="video"></iframe>
                            <div class="info-panel">
                                <h4>Rio de Janeiro</h4>
                                <p>Lorem ipsum dolor sit amet, sit amet, consectetur adipisicing elit, elit, incididunt
                                    ut labore et dolore magna aliqua sit amet, consectetur adipisicing elit,</p>
                            </div>
                        </div>
                        <!-- End Locations Video -->
                    </div>
                    <!-- End Video presentation-->

                    <!-- Widget img-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Widget Image</h4>
                        </div>
                        <img src="img/slide/1.jpg" alt="">
                        <div class="row">
                            <div class="info-panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ut sit amet, consectetur
                                    adipisicing elit, labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget img-->
                </aside>
                <!-- End content Sidebar Center -->

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
                        <div class="titles no-margin">
                            <h4><i class="fa fa-link"></i>Cta</h4>
                        </div>
                        <a href="http://themeforest.net/user/iwthemes/portfolio?ref=iwthemes" target="_blank">
                            <img src="img/adds/sidebar.png" class="img-responsive" alt="">
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