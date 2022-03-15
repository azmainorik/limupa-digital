@extends('admin.master')

@section('title')
   Manage product
@endsection

@section('body')
   <div class="ibox">
      <div class="ibox-head">
         <div class="ibox-title">Manage product</div>
      </div>
      <div class="ibox-body">
      @if($message = Session::get('message'))
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{$message}}!</strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
         </div>
      @endif

         <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
            <thead>
               <tr>
                  <th>Sl. No</th>
                  <th>Category Name</th>
                  <th>SubCategoryName</th>
                  <th>Brand Name</th>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
               <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$product->category->name}}</td>
                  <td>{{$product->subCategory->name}}</td>
                  <td>{{$product->brand->name}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->description}}</td>
                  <td><img src="{{asset($product->image)}}" height="50" width="80" alt=""></td>
                  <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                  <td>
                     
                    <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-xs">
                        <i class="fa fa-edit"></i>
                    </a>
 
                     {{--Delete--}}
                     <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger btn-xs"
                        onclick="event.preventDefault(); document.getElementById('productDeleteForm{{$product->id}}').submit();">
                        <i class="fa fa-trash"></i>
                     </a>
                  </td>
                  <form action="{{route('product.delete', ['id' => $product->id])}}" method="post" id="productDeleteForm{{$product->id}}">
                     @csrf
                  </form>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
@endsection