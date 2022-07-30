@extends('layouts.app')

@section('content')
    <section class="cf w-70 center relative mv4">
        <div class="fl w-100 pv4">
            <div class="flex flex-row-l flex-column w-100">
                @include('inc.sidebar')
                    
                <div class="w-80">
                    <div class="cf w-100">
                        <div class="dt w-100 bg-black white pa3 br3 br--right ">
                            <div class="dtc v-mid f3">
                                Blogs
                            </div>
                            <div class="dtc v-mid tr">
                                Hi {{ $LoggedUserInfo['firstname']}} {{ $LoggedUserInfo['lastname']}}
                            </div>
                        </div>
                        <div class="fl w-100 pt3">
                            <div class="fl w-100 mb2">
                                <a href="/dashboard/blog/create">
                                    <div class="fr w-auto b bg-yellow black pa2 br2">
                                        Create Blog
                                    </div>
                                </a>
                            </div>
                            <div class="fl w-100 br3 shadow-2 mt3 pa3">
                                <div class="fl w-100 bb b">
                                    <div class="fl w-30">
                                        Name
                                    </div>
                                    <div class="fl w-40">
                                        Description
                                    </div>
                                    <div class="fl w-30">
                                        Status
                                    </div>
                                </div>
                                <div class="fl w-100 h5 overflow-auto relative">
                                    @if(!$posts->isEmpty())
                                        @foreach( $posts as $post)
                                        <div class="flex flex-row items-center w-100 pv3 bb">
                                            <div class="w-30 truncate">
                                                {{$post->name}}
                                            </div>
                                            <div class="w-40 truncate">
                                                {{$post->description}}
                                            </div>
                                            <div class="w-30 pl3">
                                                <div class="flex justify-around center w-100">
                                                    <div class="w-auto">
                                                        @if($post->status==1)
                                                            <div class="fl w-auto bg-green white b br2 pa2">
                                                                Active
                                                            </div>
                                                        @else
                                                            <div class="fl w-auto bg-red white b br2 pa2">
                                                                Unactive
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="w-auto">
                                                        @if($post->status==1)
                                                            <a href="{{ route('blog.deactivate', ['id'=>$post->id]) }}">
                                                                <div class="fl w-auto bg-red white b br2 pa2">
                                                                    Deactivate
                                                                </div>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('blog.activate', ['id'=>$post->id]) }}">
                                                                <div class="fl w-auto bg-green white b br2 pa2">
                                                                    Activate
                                                                </div>
                                                            </a>
                                                        @endif
                                                    </div>
                                                    <div class="w-auto">
                                                        <a href="{{ route('dashboard.blog.edit', ['id'=>$post->id]) }}">
                                                            <div class="fl w-auto bg-yellow white b br2 pa2">
                                                                Edit
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                        <div class="fl tc w-100 pv2">
                                            No record Found
                                        </div>
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                    </div> 
                </div>

            </div>
        </div>
    </section>
@endsection
