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
                        <h2>Product List</h2>
                    </div>
                </div>
            </div>
            <div class="row shopAccessRow">
                <div class="col-lg-8 col-sm-9">
                    <div class="shopAccessLefts">
                        <a href="#" class="active"><i class="fa fa-th-large"></i>Grid</a>
                        <a href="#"><i class="fa fa-th-list"></i>list</a>
                        <span>Showing 1-12 of 350 results</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-3">
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
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">New</div>
                            <div class="saleLabel02 poppins">Sale</div>
                            <img src="/frontend/img/shop1/1.png" alt="" />
                            <div class="productHover01">
                                <a href="/view_product" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">Cropped Denim Jacket</a></h5>
                            <p class="cats"><a href="/view_product">Casuals</a></p>
                            <p class="prices"><del>$65.00</del> &nbsp;$60.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">New</div>
                            <img src="/frontend/img/shop1/2.png" alt="" />
                            <div class="productHover01">
                                <a href="/view_product" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">Racing Biker Jacket</a></h5>
                            <p class="cats"><a href="#">Fashion</a></p>
                            <p class="prices">$75.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">New</div>
                            <div class="saleLabel02 poppins">sale</div>
                            <img src="/frontend/img/shop1/3.png" alt="" />
                            <div class="productHover01">
                                <a href="/view_product" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">Straw Trilby Hat</a></h5>
                            <p class="cats"><a href="#">Casuals</a></p>
                            <p class="prices">$54.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">New</div>
                            <img src="/frontend/img/shop1/4.png" alt="" />
                            <div class="productHover01">
                                <a href="/view_product" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">Floral Slim Fit Blazer</a></h5>
                            <p class="cats"><a href="#">Fashion</a></p>
                            <p class="prices">$95.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                    <div class="singleProduct01 outofstock02 text-center">
                        <div class="productThumb01">
                            <img src="/frontend/img/shop1/5.png" alt="" />
                            <div class="outOfStockLabel02 poppins">
                                Out of stock
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">Denim Pinafore</a></h5>
                            <p class="cats"><a href="/view_product">Casuals</a></p>
                            <p class="prices">$105.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="550ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">New</div>
                            <div class="saleLabel02 poppins">sale</div>
                            <img src="/frontend/img/shop1/6.png" alt="" />
                            <div class="productHover01">
                                <a href="/view_product" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">Ballet Wrap In Stripe</a></h5>
                            <p class="cats"><a href="#">Casuals</a></p>
                            <p class="prices"><del>$95.00</del> &nbsp;$89.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">New</div>
                            <img src="/frontend/img/shop1/7.png" alt="" />
                            <div class="productHover01">
                                <a href="/view_product" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">Savage Long SLEEVE T-shirt</a></h5>
                            <p class="cats"><a href="#">Fashion</a></p>
                            <p class="prices">$105.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="650ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">New</div>
                            <div class="saleLabel02 poppins">sale</div>
                            <img src="/frontend/img/shop1/8.png" alt="" />
                            <div class="productHover01">
                                <a href="/view_product" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">Dawson Backpack </a></h5>
                            <p class="cats"><a href="/view_product">casuals</a></p>
                            <p class="prices"><del>$75.00</del> &nbsp;$65.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="700ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">New</div>
                            <img src="/frontend/img/shop1/9.png" alt="" />
                            <div class="productHover01">
                                <a href="/view_product" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">Cat Eye Sunglasses</a></h5>
                            <p class="cats"><a href="/view_product">casuals</a></p>
                            <p class="prices">$70.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="750ms">
                    <div class="singleProduct01 outofstock02 text-center">
                        <div class="productThumb01">
                            <img src="/frontend/img/shop1/10.png" alt="" />
                            <div class="outOfStockLabel02 poppins">
                                Out of stock
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins"> Swing Vest In Stripe</a></h5>
                            <p class="cats"><a href="#">Fashion</a></p>
                            <p class="prices">$95.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="800ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">New</div>
                            <img src="/frontend/img/shop1/11.png" alt="" />
                            <div class="productHover01">
                                <a href="/view_product" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">Stylish men’s SHOE</a></h5>
                            <p class="cats"><a href="/view_product">casuals</a></p>
                            <p class="prices">$125.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="850ms">
                    <div class="singleProduct01 text-center">
                        <div class="productThumb01">
                            <div class="newLabel02 poppins">New</div>
                            <div class="saleLabel02 poppins">sale</div>
                            <img src="/frontend/img/shop1/12.png" alt="" />
                            <div class="productHover01">
                                <a href="/view_product" class="vol_btn vol_btn_bg">Add to cart<i
                                        class="flaticon-arrows-3"></i></a>
                            </div>
                        </div>
                        <div class="productDesc01">
                            <h5><a href="/view_product" class="poppins">TRENDY WATCH</a></h5>
                            <p class="cats"><a href="#">casuals</a></p>
                            <p class="prices"><del>$75.00</del> &nbsp;$70.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtop32">
                <div class="col-lg-12">
                    <div class="sop_navigation text-center">
                        <a href="#">1</a>
                        <a href="#" class="current">2</a>
                        <a href="#">3</a>
                        <a href="#" class="next"><i class="flaticon-arrows-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
