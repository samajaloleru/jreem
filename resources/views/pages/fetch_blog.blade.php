@extends('layouts.app')

@section('content')
    <section class="pageTitleSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pageTitleContent">
                        <h2>J’S EDITORIAL FEATURES</h2>
                        <div class="breadcrumbs">
                            <a href="/">HOME</a> &nbsp;/ &nbsp;<a href="/blog">J’S EDITORIAL FEATURES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="comonSection">
        <div class="container">
            <div class="row flex justify-center">
                <div class="col-lg-9 col-sm-8">
                    <div class="single_blog_page">
                        <div class="lBThumbs  wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;">
                            <img src="/upload/blogs/{{ $blog->image }}" alt="">
                            <div class="lBDate">
                                <span>{{ date('d', strtotime($blog->created_at))}}</span>
                                <span>{{ date('M', strtotime($blog->created_at))}}</span>
                            </div>
                        </div>
                        <div class="loopBlogDetails">
                            <h3><a href="#">{{$blog->name}}</a></h3>
                            <div class="lbMetas">By Admin</div>
                            <div class="lbDet wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="350ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 350ms; animation-name: fadeInUp;">
                                <p>
                                    {{$blog->description}}
                                </p>
                                
                                <div class="clearfix"></div>
                                <p>
                                    {!! html_entity_decode($blog->body) !!}
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
