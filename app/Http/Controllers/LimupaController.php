<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class LimupaController extends Controller
{
    //


    private $categories;
    private $latest_products;  


    public function index()
    {
       $this->categories = Category:: where('status', '1')->get(); 

       $this->latest_products = Product:: where('latest' , '1')->get();

      //  return $this->latest_products;
               
       return view('front.home.home',[

        'categories' => $this->categories,    
        'latest_products' => $this->latest_products
        
       ]);  

    }




   public function brandProduct($id)
   {
      
      $this->categories = Category::all(); 
      $this->products = Product:: where('brand_id', $id)->orderBy('id', 'desc')->get();
        
      return view('front.category.category',[
       
        'categories' => $this->categories, 
        'products' => $this->products,
        'category' => Category::find($id),

      ]);

   }



   
   public function brandName($id)
   {
      $this->categories = Category::all(); 
      $this->subcategories = SubCategory:: where('id', $id)->get();
      $this->brands = Brand:: where('sub_category_id', $id)->orderBy('id', 'desc')->get();
        
      return view('front.brand.brand',[
       
        'subcategories' => $this->subcategories, 
        'brands' => $this->brands,
        'categories' => $this->categories, 

      ]);

   }



   public function productDetail($id)
   {

      return view('front.product.detail', [
         
         'categories' => Category::all(),
         'product'  => Product:: find($id),

      ]);

   }


   
   public function customerDetail()
   {

      return view('front.customer.register', [
         
         'categories' => Category::all(),
         
      ]);

   }


}
