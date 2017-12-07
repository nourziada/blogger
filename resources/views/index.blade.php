@extends('layouts.frontend')


@section('content')
    <div class="header-spacer"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="{{ asset($first_post->featured) }}" alt="{{ $first_post->title }}">
                        <div class="overlay"></div>
                        <a href="{{ $first_post->featured }}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="/post/{{$first_post->slug}}" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="/post/{{$first_post->slug}}">{{ $first_post->title }}</a>
                            </h2>

                            <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{ $first_post->created_at->diffForHumans() }}
                                            </time>

                                        </span>

                                <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="/category/{{$first_post->category->id}}">{{ $first_post->category->name }}</a>
                                        </span>

                                <span class="post__comments">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i><a href="/post/{{$first_post->slug}}#disqus_thread"></a>





                                        </span>

                            </div>
                        </div>
                    </div>

                </article>
            </div>
            <div class="col-lg-2"></div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="{{ asset($second_post->featured) }}" alt="{{ $second_post->title }}">
                        <div class="overlay"></div>
                        <a href="{{ asset($second_post->featured) }}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="/post/{{$second_post->slug}}" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="/post/{{$second_post->slug}}">{{ $second_post->title }}</a>
                            </h2>

                            <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{ $second_post->created_at->diffForHumans() }}
                                            </time>

                                        </span>

                                <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="/category/{{$second_post->category->id}}">{{$second_post->category->name}}</a>
                                        </span>

                                <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                            </div>
                        </div>
                    </div>

                </article>
            </div>
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="{{ asset($third_post->featured) }}" alt="{{$third_post->title}}">
                        <div class="overlay"></div>
                        <a href="{{ asset($third_post->featured) }}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="/post/{{$third_post->slug}}" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                                <a href="/post/{{$third_post->slug}}">{{$third_post->title}}</a>
                            </h2>

                            <div class="post-additional-info">

                                        <span class="post__date">

                                            <i class="seoicon-clock"></i>

                                            <time class="published" datetime="2016-04-17 12:00:00">
                                                {{$third_post->created_at->diffForHumans()}}
                                            </time>

                                        </span>

                                <span class="category">
                                            <i class="seoicon-tags"></i>
                                            <a href="/category/{{$third_post->category->id}}">{{$third_post->category->name}}</a>
                                        </span>

                                <span class="post__comments">
                                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                            6
                                        </span>

                            </div>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="col-lg-12">
                    <div class="offers">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="heading">
                                    <h4 class="h1 heading-title">{{ $first_category->name }}</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case-item-wrap">

                                @foreach($first_category->posts()->take(3)->get() as $post)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb">
                                            <img src="{{$post->featured}}" alt="{{$post->title}}">
                                        </div>
                                        <h6 class="case-item__title"><a href="/post/{{$post->slug}}">{{$post->title}}</a></h6>
                                    </div>
                                </div>

                                @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="padded-50"></div>
                    <div class="offers">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="heading">
                                    <h4 class="h1 heading-title">{{$second_category->name}}</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case-item-wrap">

                                @foreach($second_category->posts()->take(3)->get() as $post)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="case-item">
                                        <div class="case-item__thumb">
                                            <img src="{{ $post->featured }}" alt="our case">
                                        </div>
                                        <h6 class="case-item__title"><a href="/post/{{$post->slug}}">{{$post->title}}</a></h6>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop