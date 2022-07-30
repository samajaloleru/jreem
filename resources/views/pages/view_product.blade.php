@extends('layouts.app')

@section('content')
<section class="pageTitleSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pageTitleContent">
                        <h2>Product</h2>
                        <div class="breadcrumbs">
                            <a href="/">HOME</a> &nbsp;/ &nbsp;<a href="#">Product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection noPaddingBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="shopCaro" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators singShopTabnav">
                            @foreach($active_images as $key => $image)
                                <li data-target="#shopCaro {{ $key + 1 }}" data-slide-to="{{ $key + 1 }}">
                                    <img src="{{ $image->path }}" alt="">
                                </li>
                            @endforeach 
                        </ol>
    
                        <div class="carousel-inner" role="listbox">
                            @foreach($active_images as $key => $image)
                                @if($image == $active_images->first()) {{-- first item --}}
                                    <div class="item shopBimg active">
                                        <img src="{{ $image->path }}" alt="">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 noPaddingLeft">
                    <div class="singleProInfo">
                        <div class="productinfoTop">
                            <h2 class="productSiTitle">${{$product->name}}</h2>
                            <p class="prices2">&nbsp;${{$product->price}}.00</p>
                        </div>
                    </div>
                    <div class="sinShopCont">
                        <p>
                            ${{$product->short_description}}
                        </p>
                    </div>
                    <div class="sinShopCont">
                        <p>
                            ${{$product->description}}
                        </p>
                    </div>
                    <h3 class="stokPrduct">Available: {{$product->availability_quantity}} items Left in Stock</h3>
                    <div class="ctyandColor">
                        <div class="quantityW">
                            <h4>QTY:</h4>
                            <div class="quantity">
                                <button class="qtyBtn btnMinus">-</button>
                                <input type="text" name="qty" value="1" title="Qty" class="input-text qty text carqty">
                                <button class="qtyBtn btnPlus">+</button>
                            </div>
                        </div>
                        <div class="colorW">
                            <h4>SELECT COLOR:</h4>
                            <div class="productColor">
                                @foreach($active_colors as $color)
                                    <a style="background: {{ $color['hex_code'] }}" href="#"></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="cartButtons">
                        <a href="#" class="vol_btn vol_btn_bg">ADD TO CART<i class="flaticon-arrows-3"></i></a>
                        <a href="#" class="vol_btn vol_border"><i class="fa fa-heart-o"></i></a>
                        <a href="#" class="vol_btn vol_border"><i class="exchange"></i></a>
                    </div>
                </div>
            </div>
            <div class="row singprotabW">
                <div class="col-lg-12">
                    <ul class="singProDectabnav">
                        <li class="active"><a data-toggle="tab" href="#desc">description</a></li>
                        <li><a data-toggle="tab" href="#addit">additional info</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="desc" class="tab-pane fade in active">
                            <div class="proDectabcon">
                                The Love Boat soon will be making another run the love boat promises something for
                                everyone one
                                two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated the
                                weather
                                started getting rough the tiny ship was tossed if not for the courage of the fearless
                                crew the
                                minnow would be lost the minnow would be lost The first mate and his Skipper too will do
                                their
                                very best to make the others comfortable in their tropic island nest. Well we're movin'
                                on up to the east side. To a deluxe apartment in the sky. Just sit right back and you'll
                                hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny
                                ship.
                            </div>
                        </div>
                        <div id="addit" class="tab-pane fade">
                            <div class="proDectabcon">
                                The Love Boat soon will be making another run the love boat promises something for
                                everyone one
                                two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated the
                                weather
                                started getting rough the tiny ship was tossed if not for the courage of the fearless
                                crew the
                                minnow would be lost the minnow would be lost The first mate and his Skipper too will do
                                their
                                very best to make the others comfortable in their tropic island nest. Well we're movin'
                                on up to the east side. To a deluxe apartment in the sky. Just sit right back and you'll
                                hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny
                                ship.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="seperator"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
