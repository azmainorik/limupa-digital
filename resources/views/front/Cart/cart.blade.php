@extends('front.master')
@section('title')


@endsection


@section('body')


<div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </div>
</div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <th class="li-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="li-product-price">Unit Price</th>
                                                <th class="li-product-quantity">Quantity</th>
                                                <th class="li-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($sum=0)
                                            @foreach($cart_products as $cart_product)
                                            <tr>
                                                <td class="li-product-remove"><a href="{{route('cart.delete', ['id' => $cart_product->rowId])}}"><i class="fa fa-times"></i></a></td>
                                                <td class="img-fluid"><a href="#"><img src="{{asset($cart_product->options->image)}}" alt="Li's Product Image"></a></td>
                                                <td class="li-product-name"><a href="#">{{$cart_product->name}}</a></td>
                                                <td class="li-product-price"><span class="amount">{{$cart_product->price}}</span></td>
                                                <td class="quantity">
                                                 
                                            <form action="{{route('cart.update', ['id' => $cart_product->rowId])}}" method="POST">
                                                @csrf
                                                <input type="number" class="form-control" name="qty" value="{{$cart_product->qty}}" min="1" max="10" step="1" data-decimals="0" required/>
                                                <input type="submit" value="Update"/>
                                            </form>
                                                
                                                </td>
                                                <td class="product-subtotal"><span class="amount">{{number_format(($cart_product->price*$cart_product->qty))}}</span></td>
                                            </tr>
                                           
                                            @php($sum = $sum + ($cart_product->price*$cart_product->qty))
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>TK. {{number_format($sum)}}</span></li>
                                                <li>Vat / Tax: <span>&nbsp;
                                                    @php($tax = round((($sum*15)/100)))
                                                   {{number_format($tax)}}</span></li>
                                                <li>Total <span>{{number_format(($sum+$tax))}}</span></li>
                                            </ul>
                                            @if(Session::get("customerId"))
                                            <a href="{{route('checkout-shipping')}}">Proceed to checkout</a>
                                            @else
                                            <a href="{{route('customer-detail')}}">Proceed to checkout</a>
                                             @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>     
      
@endsection