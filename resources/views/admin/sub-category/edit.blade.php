@extends('admin.master')

@section('title')
    Edit  Sub Category
@endsection

@section('body')
    

<div class="card">
@if($message = Session::get('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{$message}}!</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
           </button>
    </div>
@endif
<form  action="{{route('subcategory.update', ['id' => $subCategories->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-header">
       <h4>Update Sub Category</h4>
    </div>
   <div class="card-body">

    <div class="form-group-row">
     <select class="form-control" name="category_id">
       <option value="">---Select Category Name--- </option>
        @foreach($categories as $category)
        <option value="{{$category->id}}" {{$category->id == $subCategories->category_id ? 'selected' : ''}}>{{$category->name}}</option>
        @endforeach
     </select>
    </div>
    <div class="form-group">
       <label>Sub Category Name</label>
       <input type="text" name="name" value="{{$subCategories->name}}" class="form-control" required="">
      </div>
    <div class="form-group mb-0">
        <label>Sub Category description</label>
        <textarea class="form-control" name="description" required="">{{$subCategories->description}}</textarea>
    </div>

    <div class="form-group">
       <label>Sub Category image</label>
       <div class="col-sm-9">
            <input type="file" name="image" accept="image/*" placeholder="">
            <img src="{{asset($subCategories->image)}}"  height="50" width="80" alt="">
        </div>
    </div>
                                     
    <div class="form-group">
          <label class="col-sm-3 col-form-label">Status</label>
    <div class="col-sm-9">
           <label for="" class=""><input type="radio" {{$subCategories->status == 1 ? 'checked' : '' }} value="1" name="status"> Published</label>
           <label for="" class=""><input type="radio" {{$subCategories->status == 0 ? 'checked' : '' }} value="0" name="status"> Unpublished</label>
       </div>
        </div>
       </div>
       <div class="card-footer text-left">
           <button class="btn btn-primary">Update</button>
       </div>
       </form>
    </div>
        
        
@endsection