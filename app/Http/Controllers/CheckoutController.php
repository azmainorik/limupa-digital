<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\OrderDetail;
use Cart;


use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //

    private $customer;
    private $order;
    private $orderDetail;
    private $cartProducts;
    private $categories;
    
    public function index()
    {
        $this->categories = Category::all();

        return view('front.checkout.checkout', [
            'categories' => $this->categories,
            'cart_products' => Cart::content()
        ]);
    }



    public function newOrder(Request $request)
	{
		 
        Customer::newCustomer($request);

        // OrderDetail::newOrderdetail($request);


        $this->cartProducts = Cart::content();
		
        foreach ($this->cartProducts as $cartProduct)
        {
            $this->orderdetail = new OrderDetail();
           
            // $this->orderDetail->product_id      = $cartProduct->id;
            $this->orderDetail->product_price   = $cartProduct->price;
            $this->orderDetail->product_qty     = $cartProduct->qty;
            $this->orderDetail->save();
        }

        Session::put('customer_id', $this->customer->id);
        Session::put('name', $this->customer->name);


        $this->order = new Order();
        $this->order->customer_id       = $this->customer->id;
        $this->order->order_date        = date('Y-m-d');
        $this->order->order_timestamp   = strtotime(date('Y-m-d'));
        $this->order->order_total       = Session::get('total');
        $this->order->tax_total         = Session::get('tax');
        $this->order->delivery_address  = $request->delivery_address;
        $this->order->save();

        $this->cartProducts = Cart::content();
		
        foreach ($this->cartProducts as $cartProduct)
        {
            $this->orderDetail = new OrderDetail();
            $this->orderDetail->order_id        = $this->order->id;
            $this->orderDetail->product_id      = $cartProduct->id;
            $this->orderDetail->product_price   = $cartProduct->price;
            $this->orderDetail->product_qty     = $cartProduct->qty;
            $this->orderDetail->save();
        }

        Cart::destroy();




        // Cart::destroy();


        return redirect('/complete-order')->with('message', 'Your order info submit successfully. Please wait we will contact with you soon.');
    }



}
