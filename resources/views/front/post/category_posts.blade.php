@extends('layouts.front.master')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <!-- Popular Post -->
            <section class="popular-post pb-10">
                <!-- Section title -->
                <div class="section-title">
                    <h2>Posts :: {{ $category->name }}</h2>
                </div>
                <!-- End of Section title -->

                <div class="post-blog-list">
                    <!-- Post -->
                    @foreach($posts as $post)
                        <div class="post-default post-has-right-thumb">
                            <div class="d-flex flex-wrap">
                                <div class="post-thumb align-self-stretch order-md-2">
                                    <a href="#">
                                        <div data-bg-img="{{ asset($post->file) }}"></div>
                                    </a>
                                </div>
                                <div class="post-data order-md-1">
                                    <!-- Category -->
                                    <div class="cats"><a href="#">{{ $post->category->name }}</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="#">{{ $post->title }}</a></h2>
                                    </div>
                                    <!-- Post Meta -->
                                    <ul class="nav meta align-items-center">
                                        <li class="meta-author">
                                            <img src="{{ asset($post->author->image) }}" alt="" class="img-fluid">
                                            <a href="#">{{ $post->author->name }}</a>
                                        </li>
                                        <li class="meta-date"><a href="#">{{ $post->published_at }}</a></li>
                                        <li class="meta-comments"><a href="#"><i class="fa fa-eye"></i>{{ $post->total_view }}</a></li>
                                    </ul>
                                    <!-- Post Desc -->
                                    <div class="desc">
                                        <p>
                                            {{ str_limit($post->details, 100) }}
                                        </p>
                                    </div>
                                    <!-- Read More Button -->
                                    <a href="{{ route('post.details', $post->id) }}" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>
                @endforeach
                <!-- End of Post -->

                </div>
                {{ $posts->render() }}
            </section>
            <!-- End of Popular Post  -->

            <!-- Most Viewed Post -->

            <!-- End of Most Viewed Post -->

            <!-- 728 ad -->

            <!-- End of 728 ad -->

            <!-- Video Post -->

            <!-- End of Video Post -->
        </div>
        <div class="col-lg-4">
            <div class="pt-88">
                <div class="my-sidebar">
                    <!-- Author Widget -->
                    <div class="widget widget-about">
                        <!-- Widget Content -->
                        <div class="widget-content">
                            <!-- Author Image -->
                            <div class="author-image">
                                <img src="{{ asset('assets/images/blog/author.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <!-- Author Name -->
                            <div class="author-name text-center">
                                <a href="#"> Alex Garry </a>
                            </div>
                            <!-- Author Social Links -->
                            <div class="author-social text-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- Author Text -->
                            <div class="author-text text-center">
                                In consequat, quam id sodales hendrerit, eros mi molestie leo, nec lacinia risus neque tristique augue. Proin tempus urna vel.
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

                            @include('front.post._right_featured')

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
                            <!-- Single Post -->

                            @include('front.post.right_recent_post')

                        </div>
                        <!-- End of Widget Content -->
                    </div>
                    <!-- End of Recent Post Widget -->

                    <!-- Most Commented Post Widget -->

                    <!-- End of Most Commented Post Widget -->

                    <!-- Tags Cloud Widget -->

                    <!-- End of Widget Title -->

                    <!-- Widget Content -->

                    <!-- End of Widget Content -->

                    <!-- End of Tags Cloud Widget -->


                </div>
            </div>
        </div>
    </div>
@endsection
