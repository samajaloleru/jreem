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
                                    Create Product
                                </div>
                                <div class="dtc v-mid tr">
                                    Hi {{ $LoggedUserInfo['firstname']}} {{ $LoggedUserInfo['lastname']}}
                                </div>
                            </div>
                            <div class="fl w-100 mt3">
                                <a href="/dashboard/products">
                                    <div class="fr w-auto bg-black white pa2 br2">
                                        Back
                                    </div>
                                </a>
                            </div>
                            <div class="fl w-100 pt3">
                                <form class="tl pa5 mw7 cf center b--light-blue bg-shadow flex flex-column black" action="{{url('/dashboard/product/create')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    
                                    <div class="mv1 fl w-100">
                                        <label class="pv1 f6">Name</label>
                                        <input type="text" name="name" class="bg-white ba b--light-blue w-100 br2 pa1"/>
                                    </div>
                                    <div class="mv1 fl w-100">
                                        <div class="fl w-50 pr2">
                                            <label class="pv1 f6">Category</label>
                                            <select class="bg-white ba b--light-blue w-100 br2 pa1" required="" name="category_id">
                                                <option>Select Category</option>
                                                <?php
                                                $all_published_category=DB::table('categories')
                                                                        ->where('status',1)
                                                                        ->get();
                                                foreach($all_published_category as $v_category){?>
                                                <option value="{{$v_category->id}}">{{$v_category->name}}</option>
                                                <?php }?>    
                                            </select>
                                        </div>
                                        <div class="fl w-20 pr2">
                                            <label class="pv1 f6">Price</label>
                                            <input type="number" name="price" class="bg-white ba b--light-blue w-100 br2"/>
                                        </div>
                                        <div class="fl w-30">
                                            <label class="pv1 db f6">Status</label>
                                            <div class="dt w-100">
                                                <div class="dtc v-mid">
                                                    <span class="pr2">Yes</span><input type="radio" value="1" name="status"/>
                                                </div>
                                                <div class="dtc v-mid">
                                                    <span class="pr2">No</span><input type="radio" value="0" name="status"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mv1 fl w-100">
                                        <div class="fl w-third pr2">
                                            <label class="pv1 db f6">Sales Option</label>
                                            <div class="bg-white br1 ba b--light-blue">
                                                <select class="w-100 br2 bn pa1" required name="sales_status">
                                                    <option value="Rent">Rent</option>
                                                    <option value="On sale">On sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="fl w-third pr2">
                                            <label class="pv1 f6">Avaliable Quantity</label>
                                            <input type="number" name="availability_quantity" class="bg-white ba b--light-blue w-100 br2"/>
                                        </div>
                                        <div class="fl w-third">
                                            <label class="pv1 f6">Images</label>
                                            <input type="file" name="images[]" multiple class="bg-white ba b--light-blue w-100 br2"/>
                                        </div>
                                    </div>
                                    <div class="mv1 fl w-100">
                                        <div class="fl w-50 pr2">
                                            <label class="pv1 db f6">Avaliable Colors</label>
                                            <div class="bg-white br1 ba b--light-blue">
                                                <textarea name="color" class="w-100 br2 bn pa1"></textarea>
                                            </div>
                                        </div>
                                        <div class="fl w-50">
                                            <label class="pv1 db f6">Avaliable Sizes</label>
                                            <div class="bg-white br1 ba b--light-blue">
                                                <textarea name="size" class="w-100 br2 bn pa1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mv1 fl w-100">
                                        <label class="pv1 f6">Short Description</label>
                                        <div class="bg-white br1 ba b--light-blue">
                                            <textarea name="short_description" class="w-100 br2 bn pa1"></textarea>
                                        </div>
                                    </div>
                                    <div class="mv1 fl w-100">
                                        <label class="pv1 f6">Description</label>
                                        <div class="bg-white br1 ba b--light-blue">
                                            <textarea name="description" class="w-100 br2 bn pa1"></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="mv1  fl w-100">
                                        <label class="pv1 f6">Attachment</label>
                                        <div class="bg-white br1 ba b--light-blue">
                                            <input type="file" name="image" accept="image/*" />
                                        </div>
                                    </div> -->
                                    
                                    <div class="w-100 h1">
                                        <button type="submit" class="bg-blue tc pa3 white w-100 br2 f5 f4-ns">Save</button>
                                    </div>
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
