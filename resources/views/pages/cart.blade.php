@extends('layouts.app')

@section('content')
    <section class="pageTitleSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pageTitleContent">
                        <h2>Cart</h2>
                        <div class="breadcrumbs">
                            <a href="/">HOME</a> &nbsp;/ &nbsp;<a href="#">Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comonSection cartSec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="cartHeadings">Shopping Cart Summary</h3>
                </div>
                <div class="col-lg-12 woocommerce">
                    <form action="#" method="post">
                        <table class="shop_table shop_table_responsive cart cart_table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">IMAGES</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0 ?>
                                @if(session('basket'))
                                    @foreach(session('basket') as $id => $infos)
                                        <?php $total += $infos['price'] * $infos['qty'] ?>
                                        <tr class="cart_item wow fadeInUp animated" data-wow-delay="300ms"
                                            data-wow-duration="700ms">
                                            <td class="product-thumbnail">
                                                <a href="#"><img alt="" src="{{ $infos['img'] }}"></a>
                                            </td>
                                            <td class="product-name ttc">
                                                <a class="itemtitle" href="#">{{ $infos['name'] }} </a>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="amount">${{ $infos['price'] }}.00</span>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <form action="{{ route('cart.update')}}" method="POST">
                                                    @csrf
                                                    <div class="quantity">
                                                        <button class="qtyBtn btnMinus">-</button>
                                                            <input type="text" name="qty" value="{{ $infos['qty'] }}" title="Qty" class="input-text qty text carqty">
                                                        <button class="qtyBtn btnPlus">+</button>
                                                    </div>
                                                    <input type="hidden" name="id" value="{{$id}}" >
                                                    <button type="submit" class="pa3 db center ttu white bg-black">update</button>
                                                </form>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="amount">${{ $infos['price'] * $infos['qty'] }}.00</span>
                                            </td>
                                            <td class="product-remove">
                                                <form action="{{ route('cart.remove')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$id}}" >
                                                    <button class="remove"><i class="fa fa-remove"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                <tr>
                                    <td class="actions" colspan="6">
                                        <a href="/show-cart"  class="button update_cart vol_btn vol_btn_bg">
                                            CLEAR CART
                                            <i class="flaticon-arrows-3"></i>
                                        </a>
                                        <a href="/shop"  class="button cont_shop vol_btn">
                                            CONTINUE SHOPPING
                                            <i class="flaticon-arrows-3"></i>
                                        </a>
                                        <!-- <div class="coupon pull-right">
                                            <label for="coupon_code">COUPON CODE</label>
                                            <input id="coupon_code" type="text" placeholder="Enter Your Coupon Code"
                                                value="" name="coupon_code">
                                            <input type="submit" value="Apply Coupon" name="apply_coupon"
                                                class="button vol_btn vol_btn_bg">
                                        </div> -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-7 col-xs-12 pull-right noPaddingLeft">
                    <div class="cart_totals calculated_shipping">
                        <h2>Cart Totals</h2>
                        <table class="shop_table shop_table_responsive">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal"><span class="amount">$285.00</span></td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        <ul id="shipping_method">
                                            <li>
                                                <input type="radio" name="shipping_method[0]" data-index="0"
                                                    id="shipping_method_0_free_shipping" value="free_shipping"
                                                    class="shipping_method" checked="checked">
                                                <label for="shipping_method_0_free_shipping">Free Shipping</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="shipping_method[0]" data-index="0"
                                                    id="shipping_method_0_local_delivery" value="local_delivery"
                                                    class="shipping_method">
                                                <label for="shipping_method_0_local_delivery">Local Delivery</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="shipping_method[0]" data-index="0"
                                                    id="shipping_method_0_local_pickup" value="local_pickup"
                                                    class="shipping_method">
                                                <label for="shipping_method_0_local_pickup">Local Pickup</label>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total"><strong><span class="amount">${{ $total }}.00</span></strong> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
