@extends('admin.master')

@section('title')
   Manage Category
@endsection

@section('body')
   <div class="ibox">
      <div class="ibox-head">
         <div class="ibox-title">Manage Category</div>
      </div>
      <div class="ibox-body">
         @if($message = Session::get('message'))
            <div class="alert alert-success alert-dismissable fade show">
               <button class="close" data-dismiss="alert" aria-label="Close">×</button><strong>Success!</strong>
               {{$message}}!
            </div>
         @endif

         <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
            <thead>
               <tr>
                  <th>Sl. No</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
            @foreach($brand as $brand)
               <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$brand->name}}</td>
                  <td>{{$brand->description}}</td>
                  <td><img src="{{asset($brand->image)}}" height="50" width="80" alt=""></td>
                  <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                  <td>
                     
                     <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-success btn-xs">
                        <i class="fa fa-edit"></i>
                     </a>
 
                     {{--Delete--}}
                     <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn btn-danger btn-xs"
                        onclick="event.preventDefault(); document.getElementById('brandDeleteForm{{$brand->id}}').submit();">
                        <i class="fa fa-trash"></i>
                     </a>
                  </td>
                  <form action="{{route('brand.delete', ['id' => $brand->id])}}" method="post" id="brandDeleteForm{{$brand->id}}">
                     @csrf
                  </form>
                  </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
@endsection