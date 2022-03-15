<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Unit;
use App\Models\Product;
use App\Models\SubImage;
 

class ProductController extends Controller
{
    private $products;
    private $product;
    private $categories;
    private $subcategories;
    private $brands;
    private $units;



    public function index()
    {

        $this->categories = Category::all();
        $this->subcategories = subCategory::all();
        $this->brands = Brand::all();
        $this->units = Unit::all();   

        return view('admin.product.add',   [
            
            'categories' => $this->categories,
            'subcategories' => $this->subcategories,
            'brands' => $this->brands,
            'units' => $this->units,
        
            ]);
    }




    public function create(Request $request)
    {
        $this->product=Product::newProduct($request);
        SubImage::newSubImage($this->product,$request);
        
        return redirect()->back()->with('message', 'Product info create successfully');

    }



    public function manage()
    {
        $this->products =Product::orderBy('id', 'desc')->get();
        return view('admin.product.manage',['products' => $this->products]);
    }

    public function edit($id)
    {
        $this->product = Product::find($id);
        $this->categories = Category::all();
        $this->subcategories = subCategory::all();
        $this->brands = Brand::all();
        $this->units = Unit::all();           

       
        return view('admin.product.edit', [
            
        'products' => $this->product,
        'subCategories' => $this->subcategories,
        'categories'=>$this->categories,
        'brands'=>$this->brands,
      ]);
    }


    public function update(Request $request, $id)
    {
        Product::updateProduct($request,$id);
        return redirect('/manage-product')->with('message','product info update successfully');
    }



    public function delete(Request $request, $id)
    {
        Product::deleteProduct($request,$id);
        return redirect('/manage-product')->with('message', 'product info delete successfully');
    }


}
