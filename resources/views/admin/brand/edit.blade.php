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
        <form  action="{{route('brand.update', ['id' => $brand->id])}}" method="post" enctype="multipart/form-data">
         @csrf
        <div class="card-header">
        <h4>Update Brand</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Brand Name</label>
                <input type="text" name="name" value="{{$brand->name}}" class="form-control" required="">
            </div>
            <div class="form-group mb-0">
                <label>Brand description</label>
                <textarea class="form-control" name="description" required="">{{$brand->description}}</textarea>
            </div>

            <div class="form-group">
                <label>Brand image</label>
                <div class="col-sm-9">
                     <input type="file" name="image" accept="image/*" placeholder="">
                      <img src="{{asset($brand->image)}}"  height="50" width="80" alt="">
                </div>
             </div>
                                     
              <div class="form-group">
              <label class="col-sm-3 col-form-label">Status</label>
              <div class="col-sm-9">
                <label for="" class=""><input type="radio" {{$brand->status == 1 ? 'checked' : '' }} value="1" name="status"> Published</label>
                <label for="" class=""><input type="radio" {{$brand->status == 0 ? 'checked' : '' }} value="0" name="status"> Unpublished</label>
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

