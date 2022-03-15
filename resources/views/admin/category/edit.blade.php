@extends('admin.master')

@section('title')
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
        <form  action="{{route('category.update', ['id' => $category->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <h4>Update Category</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
               <label>Category Name</label>
                <input type="text" name="name" value="{{$category->name}}" class="form-control" required="">
            </div>
            <div class="form-group mb-0">
               <label>Category description</label>
               <textarea class="form-control" name="description" required="">{{$category->description}}</textarea>
           </div>

           <div class="form-group">
               <label>Category image</label>
                <div class="col-sm-9">
                     <input type="file" name="image" accept="image/*" placeholder="">
                     <img src="{{asset($category->image)}}"  height="50" width="80" alt="">
               </div>
           </div>
           <div class="form-group">
                <label class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
                <label for="" class=""><input type="radio" {{$category->status == 1 ? 'checked' : '' }} value="1" name="status"> Published</label>
                <label for="" class=""><input type="radio" {{$category->status == 0 ? 'checked' : '' }} value="0" name="status"> Unpublished</label>
            </div>
           </div>
        </div>
        <div class="card-footer text-left">
           <button class="btn btn-primary">Update</button>
        </div>
       </form>
   </div>
        

        <!-- Start app Footer part -->        
 
@endsection

