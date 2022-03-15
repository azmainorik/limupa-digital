<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class LimupaController extends Controller
{
    //


    private $categories;


    public function index()
    {
       $this->categories = Category::all(); 
               
       return view('front.home.home',[

        'categories' => $this->categories         
        
       ]);  

    }



   public function categoryProduct($id)
   {
      
      $this->categories = Category::all(); 
      $this->products = Product:: where('category_id', $id)->orderBy('id', 'desc')->get();
        
      return view('front.category.category',[
       
        'categories' => $this->categories, 
        'products' => $this->products,
        'category' => Category::find($id),

      ]);

   }


   public function productDetail($id)
   {

      return view('front.product.detail', [
         
         'categories' => Category::all(),
         'product'  => Product:: find($id),

      ]);

   }


}
