@extends('front.master')
@section('title')


@endsection


@section('body')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
        </div>
    </div>
</div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Checkout Area Strat-->
            <div class="checkout-area pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-accordion">
                                <!--Accordion Start-->
                                <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                                <div id="checkout-login" class="coupon-content">
                                    <div class="coupon-info">
                                        <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                                        <form action="#">
                                            <p class="form-row-first">
                                                <label>Username or email <span class="required">*</span></label>
                                                <input type="text">
                                            </p>
                                            <p class="form-row-last">
                                                <label>Password  <span class="required">*</span></label>
                                                <input type="text">
                                            </p>
                                            <p class="form-row">
                                                <input value="Login" type="submit">
                                                <label>
                                                    <input type="checkbox">
                                                     Remember me 
                                                </label>
                                            </p>
                                            <p class="lost-password"><a href="#">Lost your password?</a></p>
                                        </form>
                                    </div>
                                </div>
                                <!--Accordion End-->
                                <!--Accordion Start-->
                                <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                                <div id="checkout_coupon" class="coupon-checkout-content">
                                    <div class="coupon-info">
                                        <form action="#">
                                            <p class="checkout-coupon">
                                                <input placeholder="Coupon code" type="text">
                                                <input value="Apply Coupon" type="submit">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <!--Accordion End-->
                            </div>
                        </div>
                    </div>
                    <form action="{{route('order.new')}}"  method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="checkbox-form">
                                    <h3>Customer Details</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Full Name <span class="required">*</span></label>
                                                <input placeholder="" name="name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input placeholder="" name="email" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Mobile  <span class="required">*</span></label>
                                                <input type="text" name="mobile">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input placeholder="Street address" name="address" type="text">
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                           </div>
                        <div class="col-lg-6 col-12">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Product</th>
                                                <th class="cart-product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php($sum=0)
                                        @foreach($cart_products as $cart_product)
                                            <tr class="cart_item">
                                              <td class="cart-product-name">{{$cart_product->name}}<strong class="product-quantity"> × {{$cart_product->qty}}</strong></td>
                                              <td class="cart-product-total"><span class="amount">{{$cart_product->price*$cart_product->qty}}</span></td>  
                                              @php($sum = $sum + ($cart_product->price*$cart_product->qty))
                                            </tr>                                          
                                        @endforeach    
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">{{ number_format($sum) }}</span></td>
                                            </tr>
                                            <tr class="cart-subtotal">
                                                <th>Tax:</th>
                                                <td><span class="amount">{{ $tax = ($sum * 15)/100 }}</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">{{$tax+$sum}}</span></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                   <div class="payment-accordion">
                                      <div id="accordion">
                                          <div class="card">
                                            <div class="card-header" id="#payment-1">
                                            </div>
                                           
                                        </div>
                                      </div>
                                        <div class="order-button-payment">
                                            <input value="Place order" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </form>
            </div>
        </div>  
      
@endsection