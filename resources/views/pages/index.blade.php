@extends('layouts.app')

@section('content')
    <section class="banner2">
        <div class="revSlider">
            <ul>
                <li class="slider1" data-transition="boxfade" data-slotamount="7" data-masterspeed="1000">
                    <div class="tp-caption sfb" data-x="left" data-y="top" data-hoffset="0" data-voffset="-100"
                        data-speed="1000" data-start="800" data-easing="easeInOutCirc">
                        <div class="sliderImgs">
                            <img src="frontend/img/slider/sl21.jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="tp-caption sfb" data-x="right" data-y="center" data-hoffset="0" data-voffset="-45"
                        data-speed="1000" data-start="800" data-easing="easeInQuad">
                        <h1 class="sl_h raleway">Confidence, Glamour, Culture and Vibe, Certified!</h1>
                    </div>
                    <div class="tp-caption fade" data-x="center" data-y="center" data-hoffset="220" data-voffset="25"
                        data-speed="1000" data-start="800" data-easing="easeInQuint">
                        <h5 class="sl2_x">x</h5>
                    </div>
                    <div class="tp-caption sfb" data-x="right" data-y="center" data-hoffset="0" data-voffset="86"
                        data-speed="1000" data-start="800" data-easing="easeOutBounce">
                        <div class="slbutons">
                            <a href="#" class="vol_btn poppins">SHOP NOW<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                </li>
                <li class="slider2" data-transition="boxfade" data-slotamount="7" data-masterspeed="1000">
                    <div class="tp-caption sfb" data-x="center" data-y="top" data-hoffset="0" data-voffset="-100"
                        data-speed="1000" data-start="800" data-easing="easeInOutCirc">
                        <div class="sliderImgs">
                            <img src="frontend/img/slider/sl22.jpg" alt="" />
                        </div>
                    </div>
                    <div class="tp-caption sfb" data-x="center" data-y="center" data-hoffset="0" data-voffset="-95"
                        data-speed="1000" data-start="800" data-easing="easeInQuad">
                        <h6 class="sl2_h6 playfair">The Fashion Peak</h6>
                    </div>
                    <div class="tp-caption sfb" data-x="center" data-y="center" data-hoffset="0" data-voffset="-45"
                        data-speed="1000" data-start="800" data-easing="easeInQuad">
                        <h1 class="sl_h raleway">Hey Girl! Take Up Space & Shine.</h1>
                    </div>
                    <div class="tp-caption fade" data-x="center" data-y="center" data-hoffset="0" data-voffset="25"
                        data-speed="1000" data-start="800" data-easing="easeInQuint">
                        <h5 class="sl2_x">x</h5>
                    </div>
                    <div class="tp-caption sfb" data-x="center" data-y="center" data-hoffset="120" data-voffset="86"
                        data-speed="1000" data-start="800" data-easing="easeOutBounce">
                        <div class="slbutons">
                            <a href="#" class="vol_btn poppins">SHOP NOW<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                </li>
                <li class="slider3" data-transition="boxfade" data-slotamount="7" data-masterspeed="1000">
                    <img src="frontend/img/slider/sl23.jpg" alt="" />
                    <div class="tp-caption sfb" data-x="center" data-y="center" data-hoffset="-215" data-voffset="-95"
                        data-speed="1000" data-start="800" data-easing="easeInQuad">
                        <h6 class="sl2_h6 playfair">The Fashion Peak</h6>
                    </div>
                    <div class="tp-caption sfb" data-x="center" data-y="center" data-hoffset="-250" data-voffset="-45"
                        data-speed="1000" data-start="800" data-easing="easeInQuad">
                        <h1 class="sl_h raleway">You Are Your Superpower....Limitless..</h1>
                    </div>
                    <div class="tp-caption fade" data-x="center" data-y="center" data-hoffset="-235" data-voffset="25"
                        data-speed="1000" data-start="800" data-easing="easeInQuint">
                        <h5 class="sl2_x">x</h5>
                    </div>
                    <div class="tp-caption sfb" data-x="center" data-y="center" data-hoffset="-120" data-voffset="86"
                        data-speed="1000" data-start="800" data-easing="easeOutBounce">
                        <div class="slbutons">
                            <a href="#" class="vol_btn poppins">SHOP NOW<i class="flaticon-arrows-3"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    
    
    <section class="comonSection newArrivals">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2>NEW COLLECTION</h2>
                        <div class="titleBars"></div>
                        <p>
                            New day, new look! We keep our pieces limited to ensure our designs remain exclusive.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="singleProduct01 style_two text-center">
                        <div class="labelsPro poppins newPro">New</div>
                        <div class="labelsPro poppins salePro">Sale</div>
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s1.png" alt="" />
                            <div class="productHover01">
                                <a href="shop_single.html" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Dawson Backpack</a></h5>
                            <p class="cats"><a href="shop_single.html">Accessories</a></p>
                            <p class="prices"><del>$69.00</del> $65.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="singleProduct01 style_two text-center">
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s2.png" alt="" />
                            <div class="productHover01">
                                <a href="shop_single.html" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Vila Printed Tie Neck Dress</a></h5>
                            <p class="cats"><a href="shop_single.html">fashion</a></p>
                            <p class="prices">$75.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                    <div class="singleProduct01 style_two text-center">
                        <div class="labelsPro poppins newPro">New</div>
                        <div class="labelsPro poppins salePro">Sale</div>
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s3.png" alt="" />
                            <div class="productHover01">
                                <a href="shop_single.html" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Fitch Woven Saddle Bag</a></h5>
                            <p class="cats"><a href="shop_single.html">Accessories</a></p>
                            <p class="prices"><del>$64.00</del> $63.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                    <div class="singleProduct01 style_two text-center">
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s4.png" alt="" />
                            <div class="productHover01">
                                <a href="shop_single.html" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Post Mid-Volume Backpack</a></h5>
                            <p class="cats"><a href="shop_single.html">Accessories</a></p>
                            <p class="prices">$95.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                    <div class="singleProduct01 style_two outofstock text-center">
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s5.png" alt="" />
                            <div class="outOfStockLabel poppins">OUT OF STOCK</div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Swing Vest In Stripe</a></h5>
                            <p class="cats"><a href="shop_single.html">casuals</a></p>
                            <p class="prices">$105.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="550ms">
                    <div class="singleProduct01 style_two text-center">
                        <div class="labelsPro poppins newPro">New</div>
                        <div class="labelsPro poppins salePro">Sale</div>
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s6.png" alt="" />
                            <div class="productHover01">
                                <a href="shop_single.html" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Cat Eye Sunglasses</a></h5>
                            <p class="cats"><a href="shop_single.html">Fashion</a></p>
                            <p class="prices"><del>$75.00</del> $70.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row marginTop10px">
                <div class="col-lg-12 text-center">
                    <a href="#" class="vol_btn">View all products<i class="flaticon-arrows-3"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection noPaddingTop newArrivals">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2>MOST POPULAR</h2>
                        <div class="titleBars"></div>
                        <p>
                            Checkout our most shopped designs, loved by boss ladies across Africa and beyond.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="singleProduct01 style_two text-center">
                        <div class="labelsPro poppins newPro">New</div>
                        <div class="labelsPro poppins salePro">Sale</div>
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s1.png" alt="" />
                            <div class="productHover01">
                                <a href="shop_single.html" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Dawson Backpack</a></h5>
                            <p class="cats"><a href="shop_single.html">Accessories</a></p>
                            <p class="prices"><del>$69.00</del> $65.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="singleProduct01 style_two text-center">
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s2.png" alt="" />
                            <div class="productHover01">
                                <a href="shop_single.html" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Vila Printed Tie Neck Dress</a></h5>
                            <p class="cats"><a href="shop_single.html">fashion</a></p>
                            <p class="prices">$75.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                    <div class="singleProduct01 style_two text-center">
                        <div class="labelsPro poppins newPro">New</div>
                        <div class="labelsPro poppins salePro">Sale</div>
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s3.png" alt="" />
                            <div class="productHover01">
                                <a href="shop_single.html" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Fitch Woven Saddle Bag</a></h5>
                            <p class="cats"><a href="shop_single.html">Accessories</a></p>
                            <p class="prices"><del>$64.00</del> $63.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                    <div class="singleProduct01 style_two text-center">
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s4.png" alt="" />
                            <div class="productHover01">
                                <a href="shop_single.html" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Post Mid-Volume Backpack</a></h5>
                            <p class="cats"><a href="shop_single.html">Accessories</a></p>
                            <p class="prices">$95.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                    <div class="singleProduct01 style_two outofstock text-center">
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s5.png" alt="" />
                            <div class="outOfStockLabel poppins">OUT OF STOCK</div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Swing Vest In Stripe</a></h5>
                            <p class="cats"><a href="shop_single.html">casuals</a></p>
                            <p class="prices">$105.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="550ms">
                    <div class="singleProduct01 style_two text-center">
                        <div class="labelsPro poppins newPro">New</div>
                        <div class="labelsPro poppins salePro">Sale</div>
                        <div class="productThumb01">
                            <img src="frontend/img/home2/s6.png" alt="" />
                            <div class="productHover01">
                                <a href="shop_single.html" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="shop_single.html" class="poppins">Cat Eye Sunglasses</a></h5>
                            <p class="cats"><a href="shop_single.html">Fashion</a></p>
                            <p class="prices"><del>$75.00</del> $70.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row marginTop10px">
                <div class="col-lg-12 text-center">
                    <a href="#" class="vol_btn">View all products<i class="flaticon-arrows-3"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection noPaddingTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dailyDeals text-right">
                        <img src="frontend/img/home2/deals.png" alt="" />
                        <div class="dealsContent">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="deals poppins">
                                        <h2>DEAL OF THE DAY</h2>
                                        <h4>GET FLAT 5% OFFER</h4>
                                        <p>GREAT OFFER FOR GLASSES & BAGS</p>
                                        <div class="row marginTop10px">
                                            <div class="col-lg-12 text-center">
                                                <a href="#" class="vol_btn btn-default">Sign up here<i class="flaticon-arrows-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection greys">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2>JS EDITORIAL FEATURES</h2>
                        <div class="titleBars"></div>
                        <p>
                            Stories inspired and told through fashion, art, and designs. Explore J’S editorial features and works, from styling, to creative designing, & creative directing.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="singleBlogs">
                        <div class="blogThumbs">
                            <img src="frontend/img/home2/b1.jpg" alt="" />
                            <div class="dates poppins">
                                <span>11</span>
                                <span>Jan</span>
                            </div>
                        </div>
                        <div class="blogDetails">
                            <div class="blogDetailsInner">
                                <h4 class="poppins"><a href="single_blog.html">Sunday Monday Happy Days</a></h4>
                                <p>
                                    Here everyone one two three four five six seven eight Sclemeel schlemazel
                                    hasenfeffer incorporated the others comfortable nest started from this
                                    tropic port.
                                </p>
                                <a href="single_blog.html" class="poppins blogreadmore">Read More<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="singleBlogs">
                        <div class="blogThumbs">
                            <img src="frontend/img/home2/b2.jpg" alt="" />
                            <div class="dates poppins">
                                <span>15</span>
                                <span>feb</span>
                            </div>
                        </div>
                        <div class="blogDetails">
                            <div class="blogDetailsInner">
                                <h4 class="poppins"><a href="single_blog.html">Herbert Hoover again</a></h4>
                                <p>
                                    Here everyone one two three four five six seven eight Sclemeel schlemazel
                                    hasenfeffer incorporated the others comfortable nest started from this
                                    tropic port.
                                </p>
                                <a href="single_blog.html" class="poppins blogreadmore">Read More<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection noPaddingTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="normalHr"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2>JS Community & Reviews</h2>
                        <div class="titleBars"></div>
                        <p>
                            Take a peek of our vibrant community! See what our amazing clientele says about our quality and work ethic.
                        </p>
                    </div>
                    <div id="testi_Slider" class="slide carousel">
                        <div class="carousel-inner">
                            <div class="item">
                                <div class="testiItem3">
                                    <div class="imgs">
                                        <img src="frontend/img/home3/testi.png" alt="">
                                        <p class="testRate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                    <div class="testicontent3">
                                        <span class="quotBefore"></span>
                                        The Love Boat soon will be making another run the love boat promises something for
                                        everyone one two three four five six seven eight Sclemeel first mate tropic island
                                        nest.<span class="quoteAfter"></span>
                                    </div>
                                    <div class="testiMeta3">
                                        <strong>Stuart Marsh,</strong> <span>Content Writer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="testiItem3">
                                    <div class="imgs">
                                        <img src="frontend/img/home3/testi.png" alt="">
                                        <p class="testRate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                    <div class="testicontent3">
                                        <span class="quotBefore"></span>
                                        The Love Boat soon will be making another run the love boat promises something for
                                        everyone one two three four five six seven eight Sclemeel first mate tropic island
                                        nest.<span class="quoteAfter"></span>
                                    </div>
                                    <div class="testiMeta3">
                                        <strong>Stuart Marsh,</strong> <span>Content Writer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testiItem3">
                                    <div class="imgs">
                                        <img src="frontend/img/home3/testi.png" alt="">
                                        <p class="testRate">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                    <div class="testicontent3">
                                        <span class="quotBefore"></span>
                                        The Love Boat soon will be making another run the love boat promises something for
                                        everyone one two three four five six seven eight Sclemeel first mate tropic island
                                        nest.<span class="quoteAfter"></span>
                                    </div>
                                    <div class="testiMeta3">
                                        <strong>Stuart Marsh,</strong> <span>Content Writer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#testi_Slider" role="button" data-slide="prev"></a>
                        <a class="right carousel-control" href="#testi_Slider" role="button" data-slide="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection noPaddingTop">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="singleNotice">
                        <img src="frontend/img/home2/i1.png" alt="" />
                        <h5>FASTER DELIVERY WORLDWIDE</h5>
                        <p>Guranteed Delivery with 7 Days</p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="singleNotice">
                        <img src="frontend/img/home2/i2.png" alt="" />
                        <h5>EASY RETURN & 24/7 SUPPORT</h5>
                        <p>Best Service by our Executives</p>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                    <div class="singleNotice">
                        <img src="frontend/img/home2/i3.png" alt="" />
                        <h5>FREE SHIPPING SERVICE</h5>
                        <p>Free Delivery Order over $100</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="subscriptionSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div class="subsForm">
                        <form method="post" action="#" id="subscribe2">
                            <p>Subscribe to our newsletter</p>
                            <input type="text" name="sub_email2" id="sub_email2" placeholder="Enter your Email id">
                            <button type="submit" id="sub_submit2"><i class="fa fa-paper-plane-o"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="fSocials">
                        <a href="#"><i class="fa fa-facebook"></i>
                        </a><a href="#"><i class="fa fa-twitter"></i>
                        </a><a href="#"><i class="fa fa-google-plus"></i>
                        </a><a href="#"><i class="fa fa-vimeo"></i>
                        </a><a href="#"><i class="fa fa-pinterest-p"></i>
                        </a><a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
