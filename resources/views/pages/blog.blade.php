@extends('layouts.app')

@section('content')
    <section class="pageTitleSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pageTitleContent">
                        <h2>J’S EDITORIAL FEATURES</h2>
                        <div class="breadcrumbs">
                            <a href="/">HOME</a> &nbsp;/ &nbsp;<a href="#">J’S EDITORIAL FEATURES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-4 shopsidebar">
                    <aside class="widget widget_search wow fadeInUp animated" data-wow-duration="700ms"
                        data-wow-delay="300ms"
                        style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <form action="#" class="search-form" method="get" role="search">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" name="s" value="" placeholder="Search" class="search-field">
                            </label>
                            <input type="submit" value="Search" class="search-submit">
                        </form>
                    </aside>
                </div>
                <div class="col-lg-9 col-sm-8">
                    @foreach( $blogs as $blog)
                        <div class="loopBlog wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="650ms"
                            style="visibility: visible; animation-duration: 700ms; animation-delay: 650ms; animation-name: fadeInUp;">
                            <div class="lBThumbs">
                                <img src="/upload/blogs/{{ $blog->image }}" alt="">
                                <div class="lBDate">
                                    <span>{{ date('d', strtotime($blog->created_at))}}</span>
                                    <span>{{ date('M', strtotime($blog->created_at))}}</span>
                                </div>
                            </div>
                            <div class="loopBlogDetails">
                                <h3><a href="{{ route('fetch.blog', ['id'=>$blog->id]) }}">{{$blog->name}}</a></h3>
                                <div class="lbMetas">By <a href="{{ route('fetch.blog', ['id'=>$blog->id]) }}">Admin</a></div>
                                <div class="lbDet">
                                    {{$blog->description}}
                                </div>
                                <a class="poppins rmors" href="{{ route('fetch.blog', ['id'=>$blog->id]) }}">Read More<i class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row mtop32">
                <div class="col-lg-12">
                    <div class="sop_navigation text-center">
                        <a href="#">1</a>
                        <a class="current" href="#">2</a>
                        <a href="#">3</a>
                        <a class="next" href="#"><i class="flaticon-arrows-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
