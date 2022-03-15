@extends('admin.master')

@section('title')
@endsection

@section('body')

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <div class="card">
            @if($message = Session::get('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{$message}}!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <form action="{{route('product.new')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                @foreach($categories as $category)
                <div class="form-group-row">
                    <div class="col-sm-9 col-form-label">
                        <label>Category Name</label>
                    </div>
                    <select class="form-control select2_demo_1" id="" name="category_id">
                        <option>---Select category Name--</option>
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    </select>

                    <div class="form-group-row">
                        <div class="col-sm-9 col-form-label">
                            <label>SubCategory Name</label>
                        </div>
                        <select class="form-control select2_demo_1" id="" name="subcategory_id">
                            <option>---Select subcategory Name---</option>
                            @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group-row">
                    <div class="col-sm-9 col-form-label">
                        <label>Brand Name</label>
                    </div>
                    <select class="form-control" required id="category" name="brand_id">
                        <option>---Select brand Name---</option>
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
                @endforeach
                <div class="form-group-row">
                    <div class="col-sm-9 col-form-label">
                        <label>Unit Name</label>
                    </div>
                    <select class="form-control" required id="category" name="unit_id">
                        <option>---Select unit Name---</option>
                        @foreach($units as $unit)
                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group-row">
                    <label class="col-sm-3 col-form-label">Product Name</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" type="text" placeholder="Product Name">
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-3 col-form-label">Product Code</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="code" type="text" placeholder="Product code">
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-3 col-form-label">Regular Price</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="regular_price" type="number" placeholder="regular_price">
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-3 col-form-label">Selling Price</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="selling_price" type="number" placeholder="selling_price">
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-3 col-form-label">Short description</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="short_description" type="text"
                            placeholder="short description">
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-3 col-form-label">Long description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="long_description" id="summernote" type="text"
                            placeholder="long description"></textarea>
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                        <input name="image" type="file" accept="image/*">
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-3 col-form-label">Sub_Image</label>
                    <div class="col-sm-9">
                        <input type="file" name="sub_image" multiple accept="image/*">
                    </div>
                </div>
                <div class="col-sm-9 col-form-label">
                    <label>Publication Status</label>
                    <div class="col-sm-9 col-form-label">
                        <label for="" class=""><input type="radio" value="1" name="status">published</label>
                        <label for="" class=""><input type="radio" value="0" name="status">unpublished</label>
                    </div>
                </div>
                <div class="card-footer text-left">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection