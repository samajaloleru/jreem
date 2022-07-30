@extends('layouts.app')

@section('content')
    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="flex flex-row-l flex-column w-100">
                    @include('inc.sidebar')
                        
                    <section class="w-80">
                        <div class="cf w-100">
                            <div class="dt w-100 bg-black white pa3 br3 br--right">
                                <div class="dtc v-mid f3">
                                    Update Blog
                                </div>
                                <div class="dtc v-mid tr">
                                    Hi {{ $LoggedUserInfo['firstname']}} {{ $LoggedUserInfo['lastname']}}
                                </div>
                            </div>
                            <div class="fl w-100 mt3">
                                <a href="/dashboard/categories">
                                    <div class="fr w-auto bg-black white pa2 br2">
                                        Back
                                    </div>
                                </a>
                            </div>
                            <div class="fl w-100 pt3">
                                <form class="tl pa3 mw6 cf center bg-shadow flex flex-column  black"  action="/dashboard/category/<?php echo $category['id']; ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="mv1 fl w-100">
                                        <label class="pv1 f6">Title</label>
                                        <div class="bg-white br1 ba b--light-blue">
                                            <input type="text" name="name" class="w-100 br2 bn pa1" value ='<?php echo$category['name']; ?>'/>
                                        </div>
                                    </div>
                                    <div class="mv1 fl w-100">
                                        <label class="pv1 f6">Description</label>
                                        <div class="bg-white br1 ba b--light-blue">
                                            <textarea name="description" class="w-100 br2 bn pa1">{{$category['description']}}</textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="mv1  fl w-100">
                                        <label class="pv1 f6">Attachment</label>
                                        <div class="bg-white br1 ba b--light-blue">
                                            <input type="file" name="image" accept="image/*" />
                                        </div>
                                    </div> -->
                                    
                                    <div class="w-100 h1"></div>
                                    <button type="submit" class="bg-blue tc pa3 white w-100 br2 f5 f4-ns">Update</button>
                                    <div class="w-100 h1"></div>
                                </form>
                            </div>
                        </div> 
                    </section>

                </div>
            </div>
        </div>
    </section>
@endsection
