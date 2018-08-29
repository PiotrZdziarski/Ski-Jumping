@extends('layouts.app')
@section('title')Ski Jumping @endsection
@section('content')
    <!-- Section Area - Content Central -->
    <section class="content-info">

        <div class="container paddings-mini">
            <div class="row">

                <!-- Sidebars -->
                <aside class="col-lg-3">

                    <div>
                        <h4>Searh Sidebar</h4>
                        <form class="search" action="#" method="Post">
                            <div class="input-group">
                                <input class="form-control" placeholder="Search..." name="email" type="email"
                                       required="required">
                                <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="subscribe">Go!</button>
                                        </span>
                            </div>
                        </form>
                    </div>

                    <!-- Widget Categories-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Categories</h4>
                        </div>
                        <div class="info-panel">
                            <ul class="list">
                                <li><i class="fa fa-check"></i><a href="#">Design</a></li>
                                <li><i class="fa fa-check"></i><a href="#">Photos</a></li>
                                <li><i class="fa fa-check"></i><a href="#">Videos</a></li>
                                <li><i class="fa fa-check"></i><a href="#">Lifestyle</a></li>
                                <li><i class="fa fa-check"></i><a href="#">Technology</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Widget Categories-->

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
                <!-- End Sidebars -->


                <div class="col-lg-9">
                    <!-- Content Text-->
                    <news api_link_component="@php echo getenv('APP_URL')."/api/news_show/$id" @endphp"></news>
                    <!-- End Content Text-->

                    <!-- Comments -->
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
                            <form class="form-theme">
                                <div class="row">
                                    <div class="col-md-12" style="margin-top: -20px;">
                                        <label>Comment</label>
                                        <textarea maxlength="5000" rows="10" class="form-control" name="comment"
                                                  id="comment" style="height: 138px;" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Post Comment" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                            <!-- End Form coment -->
                        </div>
                    </div>
                    <!-- End Comment Form -->

                </div>
            </div>
        </div>
@endsection