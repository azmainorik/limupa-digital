@extends('front.master')
@section('title')


@endsection


@section('body')

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
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <form action="{{route('order.new')}}" method="POST">
                                @csrf
                                <div class="checkbox-form">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="country-select clearfix">
                                                <label>Country <span class="required">*</span></label>
                                                <select class="nice-select wide">
                                                  <option data-display="Bangladesh">Bangladesh</option>
                                                  <option value="uk">London</option>
                                                  <option value="rou">Romania</option>
                                                  <option value="fr">French</option>
                                                  <option value="de">Germany</option>
                                                  <option value="aus">Australia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label> Name <span class="required">*</span></label>
                                                <input placeholder="name" name="name" type="text" value="{{$customer->name}}">                                                
                                            </div>
                                        </div>
                                       
                                        
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input placeholder="Street address" name="address"type="text">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input placeholder="" type="email" name="email" value="{{$customer->email}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input type="text" name="mobile" value="{{$customer->mobile}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list create-acc">
                                                <input id="cbox" type="checkbox">
                                                <label>Create an account?</label>
                                            </div>
                                            <div id="cbox-info" class="checkout-form-list create-account">
                                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                <label>Account password  <span class="required">*</span></label>
                                                <input placeholder="password" type="password">
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
                        
                                         @if(empty($cart_products))
                                          
                                         <h3>No order, Please Go back to home page</h3>
                                         <a href="{{route('/')}}">                                                
                                           <button type="button" class="btn btn-outline-warning ">Home Page </button>                                                
                                         </a>
                                       @else

                                        @php($sum=0)
                                        @foreach($cart_products as $cart_product)
                                       
                                
                                        <tbody>
                                            <tr class="cart_item">
                                              <td class="cart-product-name"> {{$cart_product->name}}<strong class="product-quantity"> ×{{ $cart_product->qty }}</strong></td>
                                              <td class="cart-product-total"><span class="amount">{{$cart_product->price}}</span></td>  
                                            </tr>                                           
                                        </tbody>                                     
                                    </table>                                   
                                    
                                </div>
                                
                                
                                
                                <div class="payment-method">
                                <label for="" class=""><input type="radio" value="cash" name="payment_type">Cash on delivery </label>
                                <label for="" class=""><input type="radio" value="paypal" name="payment_type">paypal</label>
                                <label for="" class=""><input type="radio" value="bkash" name="payment_type"> Bkash</label>
                                 <div class="order-button-payment">
                                    <input value="Place order" type="submit">
                                </div>
                                    
                                </div>
                                
                               @endforeach
                               @endif 
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Checkout Area End-->

            
      
@endsection