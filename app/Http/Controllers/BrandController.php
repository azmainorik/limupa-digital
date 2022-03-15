<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;


use Illuminate\Http\Request;

class BrandController extends Controller
{
    


    private  $brands;
    private  $brand;

    public function index()
    {
        return view('admin.brand.add');
    }

    public function create(Request $request)
    {
        Brand::newBrand($request);
        return redirect()->back()->with('message', 'brand added successfully');
    }

    public function manage()
    {
        $this->brands =Brand::orderBy('id', 'desc')->get();
        return view('admin.brand.manage',['brand' => $this->brands]);
    }

    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit', ['brand' => $this->brand]);
    }

    public function update(Request $request, $id)
    {
        Brand::updateBrand($request,$id);
        return redirect('/manage-brand-category')->with('message','brand update succesfully!');
    }

    public function delete(Request $request, $id)
    {
        Brand::deleteBrand($id);
        return redirect('/manage-brand-category')->with('message', 'Brand info delete successfully');
    }

}
