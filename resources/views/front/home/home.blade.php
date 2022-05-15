@extends('front.master')
@section('title')


@endsection


@section('body')

<body>

  <div class="col-md-6 col-sm-6 col-xs-12">
    <h3>Latest Products</h3>
  </div>


  <div class="owl-carousel owl-theme mt-5">
      @foreach($latest_products as $latest_product)  
        <div class="item">
          <img src="{{asset($latest_product->image)}}" alt="Li's Product Image">
            <h5><a class="product_name" href="{{route('product-detail', ['id' => $latest_product->id])}}">{{$latest_product->name}}</a><h5>
          <h6>Price: <mark>${{$latest_product->regular_price}}</mark></h6>
        </div>
       @endforeach 
        
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  

<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
</script>     


</body>               


@endsection
