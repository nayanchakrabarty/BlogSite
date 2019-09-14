@extends('layouts.front.master')
@section('content')
    <div class="row">
        <div class="col-lg-8 pb-80">
            <div class="post-details-cover">
                <!-- Post Thumbnail -->
                <div class="post-thumb-cover">
                    <div class="post-thumb">
                        <img src="{{ asset($post_details->file) }}" alt="" class="img-fluid">
                    </div>
                    <!-- Post Meta Info -->
                    <div class="post-meta-info">
                        <!-- Category -->
                        <p class="cats">
                            <a href="#">{{ $post_details->category->name }}</a>

                        </p>

                        <!-- Title -->
                        <div class="title">
                            <h2>{{ $post_details->title }}</h2>
                        </div>

                        <!-- Meta -->
                        <ul class="nav meta align-items-center">
                            <li class="meta-author">
                                <img src="{{ asset($post_details->author->image) }}" alt="" class="img-fluid">
                                <a href="#">{{ $post_details->author->name }}</a>
                            </li>
                            <li class="meta-date"><a href="#">{{ date('d M Y', strtotime($post_details->published_at)) }}</a></li>
                        </ul>
                    </div>
                    <!-- End of Post Meta Info -->
                </div>
                <!-- End oF Post Thumbnail -->

                <!-- Post Content -->
                <div class="post-content-cover my-drop-cap">
                    {{ $post_details->details }}
                </div>
                <!-- End of Post Content -->

                <!-- Tags -->

                <!-- End of Tags -->

                <!-- Author Box -->

                <!-- End of Author Box -->

                <!-- Comments -->

                <!-- End of Comments -->

                <!-- Comment Form -->

                <!-- End of Comment Form -->
            </div>
        </div>
        <div class="col-lg-4 pb-90">
            <div class="my-sidebar">
                <!-- Author Widget -->
                <div class="widget widget-about">
                    <!-- Widget Content -->
                    <div class="widget-content">
                        <!-- Author Image -->
                        <div class="author-image">
                            <img src="{{ asset($post_details->author->image) }}" alt="" class="img-fluid">
                        </div>
                        <!-- Author Name -->
                        <div class="author-name text-center">
                            <a href="#">{{ $post_details->author->name }}</a>
                        </div>
                        <!-- Author Social Links -->

                        <!-- Author Text -->
                        <div class="author-text text-center">
                            {{ $post_details->author->details }}
                        </div>
                    </div>
                    <!-- End of Widget Content -->
                </div>
                <!-- End of Author Widget -->

                <!-- Featured Posts -->
                <div class="widget widget-featured-post">
                    <!-- Widget Title -->
                    <h4 class="widget-title">
                        Featured Post
                    </h4>
                    <!-- End of Widget Title -->

                    <!-- Widget Content -->
                    <div class="widget-content">
                        <!-- Single Post -->
                    @include('front.post._right_featured')
                    <!-- End of Single Post -->

                    </div>
                    <!-- End of Widget Content -->
                </div>
                <!-- End of Featured Posts -->

                <!-- Select Category -->

                <!-- End of Select Category -->

                <!-- Ad Widget -->

                <!-- End of Ad Widget -->

                <!-- Instagram Widget -->

                <!-- End of Instagram Widget -->

                <!-- Newsletter Widget -->

                <!-- End of Newsletter Widget -->

                <!-- Recent Post Widget -->
                <div class="widget widget-recent-post">
                    <!-- Widget Title -->
                    <h4 class="widget-title">
                        Recent Post
                    </h4>
                    <!-- End of Widget Title -->

                    <!-- Widget Content -->
                    <div class="widget-content">

                        @include('front.post.right_recent_post')

                    </div>
                    <!-- End of Widget Content -->
                </div>
                <!-- End of Recent Post Widget -->

                <!-- Most Commented Post Widget -->

                <!-- End of Most Commented Post Widget -->

                <!-- Tags Cloud Widget -->

                <!-- End of Tags Cloud Widget -->
            </div>
        </div>
    </div>
@endsection
