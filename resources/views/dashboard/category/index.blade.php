@extends('layouts.app')

@section('content')
    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="flex flex-row-l flex-column w-100">
                    @include('inc.sidebar')
                        
                    <div class="w-80">
                        <div class="cf w-100">
                            <div class="dt w-100 bg-black white pa3 br3 br--right ">
                                <div class="dtc v-mid f3">
                                    Categories
                                </div>
                                <div class="dtc v-mid tr">
                                    Hi {{ $LoggedUserInfo['firstname']}} {{ $LoggedUserInfo['lastname']}}
                                </div>
                            </div>
                            <div class="fl w-100 pt3">
                                <div class="fl w-100 mb2">
                                    <a href="/dashboard/category/create">
                                        <div class="fr w-auto bg-yellow black pa2 br2">
                                            Create Category
                                        </div>
                                    </a>
                                </div>
                                <div class="fl w-100 br3 shadow-2 mt3 pa3">
                                    <div class="fl w-100 bb b">
                                        <div class="fl w-30">
                                            Name
                                        </div>
                                        <div class="fl w-30">
                                            Description
                                        </div>
                                        <div class="fl w-40">
                                            Status
                                        </div>
                                    </div>
                                    @if(!$categories->isEmpty())
                                        @foreach( $categories as $category)
                                        <div class="flex flex-row items-center w-100 pv3 bt">
                                            <div class="w-30 truncate">
                                                {{$category->name}}
                                            </div>
                                            <div class="w-30 truncate">
                                                {{$category->description}}
                                            </div>
                                            <div class="w-40 pl3">
                                                <div class="fl w-100">
                                                    <div class="fl w-third center">
                                                        @if($category->status==1)
                                                            <div class="fl w-auto bg-green white b br2 ph2">
                                                                Active
                                                            </div>
                                                        @else
                                                            <div class="fl w-auto bg-red white b br2 ph2">
                                                                Unactive
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="fl w-third center">
                                                        @if($category->status==1)
                                                            <a href="{{ route('category.deactivate', ['id'=>$category->id]) }}">
                                                                <div class="fl w-auto bg-red white b br2 ph2">
                                                                    Deactivate
                                                                </div>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('category.activate', ['id'=>$category->id]) }}">
                                                                <div class="fl w-auto bg-green white b br2 ph2">
                                                                    Activate
                                                                </div>
                                                            </a>
                                                        @endif
                                                    </div>
                                                    <div class="fl w-third center">
                                                        <a href="{{ route('dashboard.category.edit', ['id'=>$category->id]) }}">
                                                            <div class="fl w-auto bg-yellow white b br2 ph2">
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
