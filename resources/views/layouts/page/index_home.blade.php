@extends('layouts.blog')

@section('content')
    {{--  section image --}}
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div id="hot-post" class="row hot-post">
                <div class="col-md-8 hot-post-left">
                    <!-- post -->
                    <div class="post post-thumb">
                        <a class="post-img" href="{{ route('post', ['id' => $hot_post->id]) }}"><img src="./img/hot-post-1.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="{{ route('categorys', ['id' => $hot_post->category->id]) }}">{{ $hot_post->category->name }}</a>
                            </div>
                            <h3 class="post-title title-lg"><a href="{{ route('post', ['id' => $hot_post->id]) }}">{{ $hot_post->title }}</a></h3>
                            <ul class="post-meta">
                                <li><a href="{{ route('post', ['id' => $hot_post->id]) }}">{{ $hot_post->author->fullname() }}</a></li>
                                <li>{{ \Carbon\Carbon::parse($hot_post->created_at)->format('d/m/Y')}}</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
                <div class="col-md-4 hot-post-right">
                    <!-- post -->

                    @foreach ($side_posts as $post)
                        <div class="post post-thumb">
                            <a class="post-img" href="{{ route('post', ['id' => $post->id] )}}"><img src="./img/hot-post-2.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="{{ route('categorys', ['id' => $post->category->id]) }}">{{ $post->category->name }}</a>
                                </div>
                                <h3 class="post-title"><a href="{{ route('post', ['id' => $post->id ]) }}">{{ $post->title}}</a></h3>
                                <ul class="post-meta">
                                    <li><a href="{{ route('post', ['id' => $post->id ]) }}">{{ $post->author->fullname() }}</a></li>
                                    <li>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach

                    <!-- /post -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
    {{--  /section image --}}

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <!-- row -->
                    <div class="row">
                        {{-- <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">Recent posts</h2>
                            </div>
                        </div> --}}
                        <!-- post -->

                        @foreach ($posts as $post)

                            <div class="col-md-6">
                                <div class="post">
                                    <a class="post-img" href="{{ route('post' , ['id' => $post->id ]) }}"><img src="./img/post-1.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="{{ route('categorys', ['id' => $post->category->id]) }}">{{ $post->category->name }}</a>
                                        </div>
                                        <h3 class="post-title"><a href="{{ route('post' , ['id' => $post->id ]) }}">{{ str_limit($post->title, 20, '[...]') }}</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="{{ route('post' , ['id' => $post->id ]) }}">{{ $post->author->fullname() }}</a></li>
                                            <li>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="clearfix visible-md visible-lg"></div>

                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">Fashion & Travel</h2>
                            </div>
                        </div>

                    </div>
                    <!-- /row -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">Technology & Health</h2>
                            </div>
                        </div>

                    </div>
                    <!-- /row -->
                </div>

                    <!-- category widget -->
                    <div class="aside-widget">
                            <h2 class="title">Categories</h2>
                        <div class="category-widget col-md-4">
                            <ul>
                                @foreach ($categorys as $category)
                                    <li><a href="{{ route('categorys', ['id' => $category->id]) }}">{{ $category->name }} <span>{{ $category->posts->count() }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /category widget -->
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

@endsection
