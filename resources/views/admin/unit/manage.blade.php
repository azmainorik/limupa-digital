@extends('admin.master')

@section('title')
   Manage Unit
@endsection

@section('body')
   <div class="ibox">
      <div class="ibox-head">
         <div class="ibox-title">Manage Unit</div>
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
            @foreach($unit as $unit)
               <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$unit->name}}</td>
                  <td>{{$unit->description}}</td>
                  <td><img src="{{asset($unit->image)}}" height="50" width="80" alt=""></td>
                  <td>{{$unit->status == 1 ? 'Published' : 'Unpublished'}}</td>
                  <td>
                     
                     <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-success btn-xs">
                        <i class="fa fa-edit"></i>
                     </a>
 
                     {{--Delete--}}
                     <a href="{{route('unit.delete', ['id' => $unit->id])}}" class="btn btn-danger btn-xs"
                        onclick="event.preventDefault(); document.getElementById('unitDeleteForm{{$unit->id}}').submit();">
                        <i class="fa fa-trash"></i>
                     </a>
                  </td>
                  <form action="{{route('unit.delete', ['id' => $unit->id])}}" method="post" id="unitDeleteForm{{$unit->id}}">
                     @csrf
                  </form>
                  </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
@endsection