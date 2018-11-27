@extends('layouts.blog')
{{-- @php
    dd($posts_category);
@endphp --}}
@section('header-bottom')
    <div class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">{{ $categorys->name}}</h1>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('content')
    <div class="section">

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">

					<div class="row">
						<!-- post -->
                        @foreach ($posts_category as $category)
                            <div class="col-md-6">
                                <div class="post">
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">{{ $category->category->name }}</a>
                                        </div>
                                        <h3 class="post-title"><a href="blog-post.html">{{ $category->title }}</a></h3>
                                        <p>{{ str_limit($category->content, 100, '[...]') }}</p>
                                        <ul class="post-meta">
                                            <li><a href="author.html">{{ $category->author->fullname() }}</a></li>
                                            <li>{{ \Carbon\Carbon::parse($category->created_at)->format('d/m/Y')}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
						<!-- /post -->



						<div class="clearfix visible-md visible-lg"></div>

					</div>

				</div>

				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach ($all as $data)

                                    <li><a href="{{route('categorys', ['id' => $data->id])}}">{{ $data->name }} <span>{{ $data->posts->count() }}</span></a></li>

                                @endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-1.jpg" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

@endsection
