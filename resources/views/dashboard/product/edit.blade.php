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
                                    Update Product
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
                                <form class="tl pa5 mw7 cf center b--light-blue bg-shadow flex flex-column black" action="/dashboard/product/<?php echo $product['id']; ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    {{ csrf_field() }}
                                    
                                    <div class="mv1 fl w-100">
                                        <label class="pv1 f6">Name</label>
                                        <input type="text" name="name" class="bg-white ba b--light-blue w-100 br2 pa1" value ='<?php echo$product['name']; ?>'/>
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
                                                <option value="{{$v_category->id}}" {{$product->category_id == $v_category->id  ? 'selected' : ''}}>{{$v_category->name}}</option>
                                                <?php }?>    
                                            </select>
                                        </div>
                                        <div class="fl w-20 pr2">
                                            <label class="pv1 f6">Price</label>
                                            <input type="number" name="price" class="bg-white ba b--light-blue w-100 br2" value ='<?php echo$product['price']; ?>'/>
                                        </div>
                                        <div class="fl w-30">
                                            <label class="pv1 db f6">Status</label>
                                            <div class="dt w-100">
                                                <div class="dtc v-mid">
                                                    <span class="pr2">Yes</span><input type="radio" {{ $product->status == 1 ? 'checked' : ''}} value="1" name="status"/>
                                                </div>
                                                <div class="dtc v-mid">
                                                    <span class="pr2">No</span><input type="radio" {{ $product->status == 0 ? 'checked' : ''}} value="0" name="status"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mv1 fl w-100">
                                        <div class="fl w-third pr2">
                                            <label class="pv1 db f6">Sales Option</label>
                                            <div class="bg-white br1 ba b--light-blue">
                                                <select class="w-100 br2 bn pa1" required name="sales_status">
                                                    <option value="rent" {{$product->sales_status == 'rent'  ? 'selected' : ''}}>Rent</option>
                                                    <option value="on sale" {{$product->sales_status == 'on sale'  ? 'selected' : ''}}>On sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="fl w-third pr2">
                                            <label class="pv1 f6">Avaliable Quantity</label>
                                            <input type="number" name="availability_quantity" class="bg-white ba b--light-blue w-100 br2" value ='<?php echo$product['availability_quantity']; ?>'/>
                                        </div>
                                        {{-- <div class="fl w-third">
                                            <label class="pv1 f6">Images</label>
                                            <input type="file" name="images[]" multiple class="bg-white ba b--light-blue w-100 br2"/>
                                        </div> --}}
                                    </div>
                                    <div class="mv1 fl w-100">
                                        <div class="fl w-100">
                                            <label class="pv1 db f6">Avaliable Colors</label>
                                            @if(!$colors->isEmpty())
                                                <div class="flex flex-wrap ttc justify-between">
                                                    @foreach( $colors as $color)
                                                        <div class="w- tc">
                                                            <div class="pa3 center h1 w1" style="background-color: {{$color['hex_code']}}"></div>
                                                            <div class="db w-100">
                                                                {{$color['name']}}
                                                            </div>
                                                            <div class="fl f7 w-100">
                                                                @if($color->status==1)
                                                                    <a href="{{ route('product_color.deactivate', ['id'=>$color->id]) }}">
                                                                        <div class="w-auto center bg-red white b br2 pa1">
                                                                            Deactivate
                                                                        </div>
                                                                    </a>
                                                                @else
                                                                    <a href="{{ route('product_color.activate', ['id'=>$color->id]) }}">
                                                                        <div class="w-auto center bg-green white b br2 pa1">
                                                                            Activate
                                                                        </div>
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="pt3 fl w-100">
                                            <label class="pv1 db f6">Avaliable Size</label>
                                            @if(!$sizes->isEmpty())
                                                <div class="flex flex-wrap ttc justify-between">
                                                    @foreach( $sizes as $size)
                                                        <div class="w- tc">
                                                            <div class="db w-100">
                                                                {{$size['name']}}
                                                            </div>
                                                            <div class="fl f7 w-100">
                                                                @if($size->status==1)
                                                                    <a href="{{ route('product_size.deactivate', ['id'=>$size->id]) }}">
                                                                        <div class="w-auto center bg-red white b br2 pa1">
                                                                            Deactivate
                                                                        </div>
                                                                    </a>
                                                                @else
                                                                    <a href="{{ route('product_size.activate', ['id'=>$size->id]) }}">
                                                                        <div class="w-auto center bg-green white b br2 pa1">
                                                                            Activate
                                                                        </div>
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="pt3 pb2 b--white bb fl w-100">
                                            <label class="pv1 db f6">Images</label>
                                            @if(!$images->isEmpty())
                                                <div class="flex flex-wrap ttc justify-between">
                                                    <div class="w-100 bg-transparent flex items-center overflow-auto pv2">
														@foreach( $images as $image)
                                                        <div class="relative w-40 pr3 flex flex-column flex-grow-0 flex-shrink-0">
															<img src="{{ $image->path }}" class="h4 w-100 br2 br--top mr1" style="object-fit: cover;"/>
                                                            <div class="fl tc f7 w-100">
                                                                @if($image->status==1)
                                                                    <a href="{{ route('product_image.deactivate', ['id'=>$image->id]) }}">
                                                                        <div class="w-auto center bg-red white b br2 pa1">
                                                                            Deactivate
                                                                        </div>
                                                                    </a>
                                                                @else
                                                                    <a href="{{ route('product_image.activate', ['id'=>$image->id]) }}">
                                                                        <div class="w-auto center bg-green white b br2 pa1">
                                                                            Activate
                                                                        </div>
                                                                    </a>
                                                                @endif
                                                            </div>
														</div>
                                                        @endforeach
													</div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mv1 fl w-100">
                                        <label class="pv1 f6">Short Description</label>
                                        <div class="bg-white br1 ba b--light-blue">
                                            <textarea name="short_description" class="w-100 br2 bn pa1">{{$product['short_description']}}</textarea>
                                        </div>
                                    </div>
                                    <div class="mv1 fl w-100">
                                        <label class="pv1 f6">Description</label>
                                        <div class="bg-white br1 ba b--light-blue">
                                            <textarea name="description" class="w-100 br2 bn pa1">{{$product['description']}}</textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="mv1  fl w-100">
                                        <label class="pv1 f6">Attachment</label>
                                        <div class="bg-white br1 ba b--light-blue">
                                            <input type="file" name="image" accept="image/*" />
                                        </div>
                                    </div> -->
                                    
                                    <div class="w-100 h1">
                                        <button type="submit" class="bg-blue tc pa3 white w-100 br2 f5 f4-ns">Update</button>
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
