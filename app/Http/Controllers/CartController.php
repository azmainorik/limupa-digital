<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
   

    private $categories;

    public function add(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id'    => $this->product->id,
            'name'  => $this->product->name,
            'qty'   => $request->quantity,
            'price' => $this->product->selling_price,
            'weight'    => 0,
            'options'   => [
                'image' => $this->product->image
            ]
        ]);

        return redirect('/show-cart')->with('message', 'Product info add into the cart successfully.');
    }


    public function show()
    {

        $this->categories = Category::all();

        return view('front.cart.cart',[
            'categories' => $this->categories,
            'cart_products' => Cart::content()
        ]);

    }



    public function update(Request $request, $id)
    {
        Cart::update($id, $request->qty);
        return redirect()->back()->with('message', 'Cart product info update successfully.');
    }



    public function delete($id)
    {
        Cart::remove($id);
        return redirect()->back()->with('message', '<span class="text-danger">Cart product info delete successfully.</span>');
    }



}
