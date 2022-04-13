<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\Models\Category;
use App\Models\Customer;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Shipping;
use Cart;
use Session;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //

    private $customer;
    private $shipping;
    private $shippingDetail;
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




    public function register(Request $request)
    {
         $request->validate(
            [
               'name' => 'required|min:5|max:25',
               'email'=> 'required|unique:customers,email',
               'mobile'=>'required|min:11|max:11',
               'password'=>'min:6|max:20|required_with:confirm_password|same:confirm_password'
               
            ],

            [
              'name.required' => "min 5 length and maximum 25 length",
              'email.required' => "email must be unique",
              'password.required'=>"min length 6 max length 20",
                   
            ]

          );

         
          $customer = Customer::create([

            "name" => $request->name,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "password" => bcrypt($request->password)

          ]);

          Session::put(['customerId'=>$customer->id]);

        //   $info= [

        //      "name" => $customer->name

        //   ];

        //   Mail::to($customer->email)->send(new Welcome($info));


        return redirect('/checkout/shipping');

    }


    
    public function loginInfo(Request $request)
    {

      $this->categories = Category::all();

        return view('front.customer.login', [
          'categories' => $this->categories,
        ]);
    
    }


    public function login(Request $request)
    {

      
        //  $request->validate(
        //     [
        //        'email'=> 'required',              
        //        'password'=>'required|min:5|max:12'
        //     ]

        //  );

         
        $customer = Customer::where('email',$request->email)->first();

        $cartContents= Cart::content();

        
        // return $customer;

        if($customer){         


        
        if(password_verify($request->password, $customer->password))
        {

          Session::put(['customerId'=>$customer->id]);          

          // if($cartContents->price=0)
          // {
              
          //   return redirect('/');

          // }
          // return $cartContents->price;

          
          return redirect('/checkout/shipping');


        }
         else
         {
          Session()->flash("loginerror", "these information are invalid");
          return redirect()->back();

         }

        }
        else
        {

          Session()->flash("loginerror", "these information are invalid");
          return redirect()->back();

        }

        


        Session::put(['customerId'=>$customer->id]);

        //   Mail::to($customer->email)->send(new Welcome($info));

        // return redirect('/checkout/shipping');

    }



    public function logout()
    {
      Session()->forget("customerId");
      Cart::destroy();
      return redirect('/');

    }
    
    
    public function shipping()
    {
        $this->customer = Customer::find(Session::get('customerId')) ;
        $this->categories = Category::all();
        
        
        return view('front.shipping.shipping', [
            
            'customer' => $this->customer,
            'categories' => $this->categories,
            'cart_products' => Cart::content()

           ]);

    }




    
  public function newOrder(Request $request)
	{
		 
        $cartContents= Cart::content();

        foreach($cartContents as $cartcontent)
        {
         
         $shipping= new Shipping();
         $shipping->name= $request->name;
         $shipping->email= $request->email;
         $shipping->mobile= $request->mobile;
         $shipping->address= $request->address;
         $shipping->customer_id = Session::get('customerId');
         $shipping->total_price = $cartcontent->price;
         $shipping->payment_type = $request->payment_type;
         $shipping->save();

        }

        foreach($cartContents as $cartcontent)
        {

          $order_detail= new OrderDetail();
          $order_detail->shipping_id=$shipping->id;
          $order_detail->customer_id=Session::get('customerId');
          $order_detail->product_id=$cartcontent->id;
          $order_detail->product_name=$cartcontent->name;
          // $order_detail->product_image=$cartcontent->attributes->product_image;          
          $order_detail->product_price=$cartcontent->price;
          $order_detail->product_quantity=$cartcontent->qty;
          $order_detail->save();

        }


        Cart::destroy();



        
       // return $shipping->total_price;

        // Customer::newCustomer($request);

        // // OrderDetail::newOrderdetail($request);


        // $this->cartProducts = Cart::content();
		
        // foreach ($this->cartProducts as $cartProduct)
        // {
        //     $this->orderdetail = new OrderDetail();
           
        //     // $this->orderDetail->product_id      = $cartProduct->id;
        //     $this->orderDetail->product_price   = $cartProduct->price;
        //     $this->orderDetail->product_qty     = $cartProduct->qty;
        //     $this->orderDetail->save();
        // }

        // Session::put('customer_id', $this->customer->id);
        // Session::put('name', $this->customer->name);


        // $this->order = new Order();
        // $this->order->customer_id       = $this->customer->id;
        // $this->order->order_date        = date('Y-m-d');
        // $this->order->order_timestamp   = strtotime(date('Y-m-d'));
        // $this->order->order_total       = Session::get('total');
        // $this->order->tax_total         = Session::get('tax');
        // $this->order->delivery_address  = $request->delivery_address;
        // $this->order->save();

        // $this->cartProducts = Cart::content();
		
        // foreach ($this->cartProducts as $cartProduct)
        // {
        //     $this->orderDetail = new OrderDetail();
        //     $this->orderDetail->order_id        = $this->order->id;

        //     $this->orderDetail->product_id      = $cartProduct->id;
        //     $this->orderDetail->product_price   = $cartProduct->price;
        //     $this->orderDetail->product_qty     = $cartProduct->qty;
        //     $this->orderDetail->save();
        // }

        // Cart::destroy();
        // Cart::destroy();



        return redirect('/complete-order')->with('message', 'Your order info submit successfully. Please wait we will contact with you soon.');
    }






}
