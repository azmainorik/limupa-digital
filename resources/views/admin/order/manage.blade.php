@extends('admin.master')

@section('title')
   Manage Order
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
                  <th>id</th>
                  <th>Shipping id</th>
                  <th>Customer id</th>
                  <th>Product id</th>
                  <th>Product Name</th>
                  <th>Product price</th>
                  <th>Product quantity</th>
                  
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
            @foreach($orderdetails as $order)

               <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$order->id}}</td>
                  <td>{{$order->shipping_id}}</td>
                  <td>{{$order->customer_id}}</td>
                  <td>{{$order->product_id}}</td>
                  <td>{{$order->product_name}}</td>
                  <td>{{$order->product_price}}</td>
                  <td>{{$order->product_quantity}}</td>
                 
                  <td>
                     
                  <a href="{{route('order.info', ['id' => $order->customer_id])}}" class="btn btn-success btn-xs">
                        <i class="fa fa-edit"></i>
                  </a>
                      
                  </td>
                 
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
@endsection