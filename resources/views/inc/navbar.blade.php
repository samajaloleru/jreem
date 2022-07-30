<section class="topBar2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <div class="conversionMenu">
                    <ul class="clearfix poppins">
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#langTogg">
                                eng
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="sub-menu collapse" id="langTogg">
                                <li><a href="#">GERMAN</a></li>
                                <li><a href="#">FRENCH</a></li>
                                <li><a href="#">ENGlISH</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#usd">
                                $NGN
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="sub-menu collapse" id="usd">
                                <li><a href="#">$NGN</a></li>
                                <li><a href="#">$KSH</a></li>
                                <li><a href="#">$GHS</a></li>
                                <li><a href="#">$RWF</a></li>
                                <li><a href="#">$GBP</a></li>
                                <li><a href="#">$EUR</a></li>
                                <li><a href="#">$CAD</a></li>
                                <li><a href="#">$ZAR</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-sm-6">
                <div class="accessMenus poppins">
                    <ul>
                        @if (!session()->has('LoggedUser'))
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        @endif
                        @if (session()->has('LoggedUser'))
                            <li><a href="/dashboard">Account</a></li>
                            <li><a href="/logout">Logout</a></li>
                        @endif
                        <li><a href="/cart">MY CART</a></li>
                        <li><a href="/checkout">CHECKOUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="normalHr2"></div>
            </div>
        </div>
    </div>
</section>

<header class="header2" id="header2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-2">
                <div class="logo2">
                    <a href="/"><img src="/frontend/img/logo2.png" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-9 col-sm-10">
                <nav class="mainMenu2 poppins pull-right">
                    <div class="mobileMenu2">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li class="has-menu-items"><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li class="subMentTitle">Shop</li>
                                <li><a href="/shop">NEW COLLECTION</a></li>
                                <li><a href="/shop">MOST POPULAR</a></li>
                                <li><a href="/shop">ALL PRODUCTS</a></li>
                                @foreach ($navbarCategories as $category)
                                    <li><a href="{{ route('product_by_category', ['id'=>$category->id]) }}">{{ $category->name }}</a></li>
                                @endforeach
                                <!-- <li><a href="/shop">SKIRTS</a></li>
                                <li><a href="/shop">SHORTS</a></li>
                                <li><a href="/shop">TOPS</a></li>
                                <li><a href="/shop">CO-ORDS</a></li>
                                <li><a href="/shop">DREESSES</a></li>
                                <li><a href="/shop">JUMPSUITS</a></li>
                                <li><a href="/shop">JACKETS</a></li>
                                <li><a href="/shop">ROBES</a></li>
                                <li><a href="/shop">LUXURY FASHION</a></li>
                                <li><a href="/shop">JS SPECIALS</a></li>
                                <li><a href="/shop">SIZE GUIDE</a></li> -->
                            </ul>
                        </li>
                        <li class="has-menu-items"><a href="#">Services</a>
                            <ul class="sub-menu">
                                <li class="subMentTitle">J’S Offers</li>
                                <li><a href="/service">READY-TO-WEAR FASHION</a></li>
                                <li><a href="/service">CUSTOM MADE</a></li>
                                <li><a href="/service">STYLE CONSULTATION</a></li>
                                <li><a href="/service">CREATIVE DIRECTION</a></li>
                                <li><a href="/service">DESIGN ILLUSTRATION & CREATION</a></li>
                            </ul>
                        </li>
                        <li><a href="/blogs">J’S EDITORIAL FEATURES</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</header>