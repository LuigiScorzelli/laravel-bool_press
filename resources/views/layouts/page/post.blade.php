@extends('layouts.blog')
{{-- @php
    dd($all_posts);
@endphp --}}

@section('header-bottom')

    <div id="post-header" class="page-header">
    			{{-- <div class="page-header-bg" style="background-image: url('images/header-1.jpg');" data-stellar-background-ratio="0.5"></div> --}}
    			<div class="container">
    				<div class="row">
    					<div class="col-md-10">
    						<div class="post-category">
    							<a href="category.html">{{ $post->category->name}}</a>
    						</div>
    						<h1>{{ $post->title }}</h1>
    						<ul class="post-meta">
    							<li><a href="author.html">{{ $post->author->fullname() }}</a></li>
    							<li>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</li>
    							<li><i class="fa fa-eye"></i> 807</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>

@endsection

@section('content')

    <!-- section -->
    	<div class="section">
    		<!-- container -->
    		<div class="container">
    			<!-- row -->
    			<div class="row">
    				<div class="col-md-8">

    					<!-- post content -->
    					<div class="section-row">
    						<h3>{{ $post->title }}</h3>
    						<p>{!! $post->content !!}</p>

                        </div>
    					<!-- /post content -->

    					<!-- post tags -->
    					<div class="section-row">
    						<div class="post-tags">
    							<ul>
    								<li>TAGS:</li>
    								<li><a href="#">Social</a></li>
    								<li><a href="#">Lifestyle</a></li>
    								<li><a href="#">Fashion</a></li>
    								<li><a href="#">Health</a></li>
    							</ul>
    						</div>
    					</div>
    					<!-- /post tags -->

    					<!-- post nav -->
    					<div class="section-row">
    						<div class="post-nav">
    							<div class="prev-post">
    								<a class="post-img" href="blog-post.html"><img src="./img/widget-8.jpg" alt=""></a>
    								<h3 class="post-title"><a href="#">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
    								<span>Previous post</span>
    							</div>

    							<div class="next-post">
    								<a class="post-img" href="blog-post.html"><img src="./img/widget-10.jpg" alt=""></a>
    								<h3 class="post-title"><a href="#">Postea senserit id eos, vivendo periculis ei qui</a></h3>
    								<span>Next post</span>
    							</div>
    						</div>
    					</div>
    					<!-- /post nav  -->

    					<!-- post comments -->
    					<div class="section-row">
    						<div class="section-title">
    							<h3 class="title">3 Comments</h3>
    						</div>
    						<div class="post-comments">
    							<!-- comment -->
    							<div class="media">
    								<div class="media-left">
    									{{-- <img class="media-object" src="./img/avatar-2.jpg" alt=""> --}}

    								</div>
    								<div class="media-body">
                                        @foreach ($comments as $comment)
                                            <div class="media-heading">
        										<h4>{{ $comment->name }} {{ $comment->last_name }}</h4>
        										<span class="time">{{ \Carbon\Carbon::parse($comment->created_at)->format('d/m/Y')}}</span>
        									</div>
        									<p>{{ $comment->text}}</p>
        									<a href="#" class="reply">Reply</a>

                                        @endforeach

    									<!-- comment -->
    									{{-- <div class="media media-author">
    										<div class="media-left">
    											{{-- <img class="media-object" src="./img/avatar-1.jpg" alt=""> --}}
    										{{-- </div>
    										<div class="media-body">
    											<div class="media-heading">
    												<h4><span>{{ $comment->name }}</span></h4>
    												<span class="time">5 min ago</span>
    											</div>
    											<p>{{ $comment->text}}</p>
    											<a href="#" class="reply">Reply</a>
    										</div>--}}
    									</div>
    									<!-- /comment -->
    								</div>
    							</div>
    							<!-- /comment -->
    						</div>
    					</div>

    					<!-- /post comments -->
                        <div class="aside-widget">
                            <!-- ad widget -->
                            <div class="aside-widget text-center">
                                <a href="#" style="display: inline-block;margin: auto;">
                                    <img class="img-responsive" src="./img/ad-3.jpg" alt="">
                                </a>
                            </div>
                            <!-- /ad widget -->

                            <!-- category widget -->
                            {{-- <div class="aside-widget"> --}}
                                <div class="section-title">
                                    <h2 class="title">Categories</h2>
                                </div>
                                <div class="category-widget col-md-4">
                                    <ul>
                                        @foreach ($categorys as $category)
                                            <li><a href="{{ route('categorys', ['id' => $category->id]) }}">{{ $category->name }} <span>{{ $category->posts->count() }}</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            {{-- </div> --}}
                            <!-- /category widget -->

                        </div>
                        <!-- /row -->
    				</div>
                    <!-- /container -->
    			</div>
    			<!-- /SECTION -->
    		</div>


            <div class="section">
                <div class="container">
                    <div class="row">
                        <!-- /related post -->
					<div>
						<div class="section-title">
							<h3 class="title">Related Posts</h3>
						</div>
						<div class="row">
                            @foreach ($all_posts as $post)
                                <!-- post -->
                                <div class="col-md-4">
                                    <div class="post post-sm">
                                        {{-- <a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a> --}}
                                        <div class="post-body">
                                            <div class="post-category">
                                                <a href="category.html">{{ $post->category->name}}</a>
                                            </div>
                                            <h3 class="post-title title-sm"><a href="#">{{ $post->title }}</a></h3>
                                            <p>{{ str_limit($post->content, 100, '[...]') }}</p>
                                            <ul class="post-meta">
                                                <li><a href="author.html">{{ $post->author->fullname()}}</a></li>
                                                <li>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /post -->
                            @endforeach
						</div>
					</div>
					<!-- /related post -->

                    </div>
                </div>
            </div>

@endsection
