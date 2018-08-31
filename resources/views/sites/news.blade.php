@extends('layouts.app')
@section('title')Ski Jumping @endsection
@section('content')
    <!-- Section Area - Content Central -->
    <section class="content-info">

        <div class="container paddings-mini">
            <div class="row">

                <!-- Sidebars -->
                <aside class="col-lg-3">

                    <!-- Widget Text-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Widget Text</h4>
                        </div>
                        <div class="info-panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et
                                dolore.</p>
                        </div>
                    </div>
                    <!-- End Widget Text-->

                    <!-- Widget img-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4><a href="{{url('/news/2')}}">Grandmaster Stoch</a></h4>
                        </div>
                        <a href="{{url('/news/2')}}"><img src="{{asset('img/slide/stoch.jpg')}}" alt="Kamil Stoch"></a>
                        <div class="row">
                            <div class="info-panel">
                                <p>in Planica, the season of one hero ended. The leader of the Polish team has the best
                                    months in his career. And he still counts that this is not the end!.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget img-->
                </aside>
                <!-- End Sidebars -->


                <div class="col-lg-9">
                    <!-- Content Text-->
                    <news api_link_component="@php echo getenv('APP_URL')."/api/news_show/$id" @endphp"></news>
                    <!-- End Content Text-->

                    <div class="panel-box">
                        <!-- Title Post -->
                        <div class="titles">
                            <h4>Comments</h4>
                        </div>
                        <!-- Title Post -->
                        <list database="comments"
                              api_link="@php echo getenv('APP_URL')."/api/comment_show/$id" @endphp"></list>
                    </div>
                    <!-- End Comments -->

                    <!-- Comment Form -->
                    <div class="panel-box padding-b">
                        <!-- Title Post -->
                        <div class="titles">
                            <h4>Publish Commnet</h4>
                        </div>

                        <div class="info-panel">
                            <!-- Form coment -->
                            <form-comment api_link="@php echo getenv('APP_URL')."/api/comment_store/" @endphp"
                                          news_id="{{$id}}"></form-comment>
                            <!-- End Form coment -->
                        </div>
                    </div>
                    <!-- End Comment Form -->

                </div>
            </div>
        </div>
@endsection