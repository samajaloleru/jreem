@extends('layouts.app')

@section('content')
    <section class="pageTitleSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pageTitleContent">
                        <h2>Shop</h2>
                        <div class="breadcrumbs">
                            <a href="/">HOME</a> &nbsp;/ &nbsp;<a href="#">shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop_heading">
                        <h2>{{$category->name}} List</h2>
                    </div>
                </div>
            </div>
            <div class="row shopAccessRow">
                <div class="col-lg-8 col-sm-9">
                    <div class="shopAccessLefts">
                        <span>Showing 1-12 of 350 results</span>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-3">
                    <div class="shopShorts">
                        <div class="shopShortList">
                            <select name="sort_select">
                                <option value="">Sort By</option>
                                <option value="1">Featured</option>
                                <option value="2">popular</option>
                                <option value="3">Price</option>
                            </select>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                @foreach( $products as $product)
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="singleProduct01 text-center">
                            <div class="productThumb01">
                                <div class="newLabel02 poppins">New</div>
                                <div class="saleLabel bg-gray pa2 w-auto poppins">{{$product->sales_status}}</div>
                                <?php
                                $active_images=DB::table('productimages')
                                                        ->where('product_id',$product->id)
                                                        ->where('status',1)
                                                        ->inRandomOrder()
                                                        ->first();
                                {?>
                                    <img src="{{ $active_images->path }}" style="height: 14rem" alt="" />
                                <?php }?>  
                                <div class="productHover01">
                                    <a href="{{ route('cart.store', ['id'=>$product->id, 'img'=>$active_images->path]) }}" class="vol_btn vol_btn_bg">Add to cart<i class="flaticon-arrows-3"></i></a>
                                </div>
                            </div>
                            <div class="productDesc01">
                                <h5><a href="{{ route('view_product', ['id'=>$product->id]) }}" class="poppins">{{$product->name}}</a></h5>
                                <p class="prices">${{$product->price}}.00</p>
                            </div>
                        </div>
                    </div>
                @endforeach    
            </div>
            {{-- <div class="row mtop32">
                <div class="col-lg-12">
                    <div class="sop_navigation text-center">
                        <a href="#">1</a>
                        <a href="#" class="current">2</a>
                        <a href="#">3</a>
                        <a href="#" class="next"><i class="flaticon-arrows-3"></i></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    
@endsection
