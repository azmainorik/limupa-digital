@extends('admin.master')

@section('title')
    Edit  Sub Category
@endsection

@section('body')
    

<div class="card">
    <form  action="{{route('product.update', ['id' => $products->id])}}" method="post" enctype="multipart/form-data">
        @csrf
         <div class="card-header">
            <h4>Update Product</h4>
        </div>
        <div class="card-body">
            <div class="form-group-row">
                    <select class="form-control" name="category_id">
                        <option value="">---Select Category Name--- </option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == $products->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group-row">
                    <select class="form-control" name="subCategory_id">
                    <option value="">---Select Sub Category Name--- </option>
                    @foreach($subCategories as $subCategory)
                    <option value="{{$subCategory->id}}" {{$subCategory->id == $products->sub_category_id ? 'selected' : ''}}>{{$subCategory->name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group-row">
                    <select class="form-control" name="brand_id">
                    <option value="">---Select brand Name--- </option>
                    @foreach($brands as $brand)
                    <option value="{{$brand->id}}" {{$brand->id == $products->brand_id ? 'selected' : ''}}>{{$brand->name}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" value="{{$products->name}}" class="form-control" required="">
                </div>

               <div class="form-group mb-0">
                    <label>Product description</label>
                    <textarea class="form-control" name="long_description" required="">{{$products->long_description}}</textarea>
               </div>
        
                <div class="form-group">
                    <label>Product image</label>
                    <div class="col-sm-9">
                       <input type="file" name="image" accept="image/*" placeholder="">
                       <img src="{{asset($products->image)}}"  height="50" width="80" alt="">
                    </div>
                </div>
                                     
                <div class="form-group">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <label for="" class=""><input type="radio" {{$products->status == 1 ? 'checked' : '' }} value="1" name="status"> Published</label>
                        <label for="" class=""><input type="radio" {{$products->status == 0 ? 'checked' : '' }} value="0" name="status"> Unpublished</label>
                    </div>
                </div>
            </div>
            <div class="card-footer text-left">
                <button class="btn btn-primary">Update</button>
            </div>
    </form>
</div>
               
@endsection