<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    use HasFactory;

    // private static $orderdetail;
    // private static $order_id;
    // private static $product_id;
    // private static $product_price;
    // private static $product_qty;
    // private static $cartProducts;

    // public static function neworderdetail($request)
    // {
        
    //     $this->cartProducts = Cart::content();
		
    //     foreach ($this->cartProducts as $cartProduct)
    //     {
    //         self::$orderdetail = new orderdetail();
    //         self::$orderdetail->order_id        = self::order->id;
    //         self::$orderdetail->product_id      = $cartProduct->id;
    //         self::$orderdetail->product_price   = $cartProduct->price;
    //         self::$orderdetail->product_qty     = $cartProduct->qty;
    //         self::$orderdetail->save();
    //     }

    // }

}
