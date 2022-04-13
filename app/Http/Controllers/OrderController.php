<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OrderDetail;
use App\Models\Shipping;

class OrderController extends Controller
{
    //

    
    public function manage()
    {

       $this->orderdetails = OrderDetail::all() ;
       return view('admin.order.manage', [
          
        'orderdetails' => $this->orderdetails
    
      ]);

    }

    
    public function info($id)
    {

       $this->orders = Shipping::find($id) ;
       return view('admin.order.info', [
          
        'orders' => $this->orders
    
      ]);

    }




}
