@extends('admin.master')

@section('title')
    Edit  Order
@endsection

@section('body')
<table class="table table-striped">
  <thead>

  @foreach($orders as $orderdetail)
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$orderdetail->shipping_id}}</td>
      <td>{{$orderdetail->customer_id}}</td>
      <td>{{$orderdetail->product_id}}</td>
      
    </tr>
    @endforeach
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
               
@endsection