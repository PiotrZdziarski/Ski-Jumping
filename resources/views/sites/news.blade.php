@extends('layouts.app')
@section('title'){{$title}}@endsection
@section('content')
    <!-- Section Area - Content Central -->
    <section class="content-info">

        <div class="container paddings-mini">
            <div class="row">

                @include('components.sidebar')


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