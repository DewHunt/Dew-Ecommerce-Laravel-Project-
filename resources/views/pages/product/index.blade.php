@extends('layouts.master')

@section('content')
  <!-- Start Sidebar and Content -->
  <div class="container margin-top-20">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          @include('partials/product-sidebar')
        </div>
      </div>

      <div class="col-md-9">
        <div class="widget">
          <h3>All Products</h3>
          <div class="row">

            @foreach ($products as $product)
              <div class="col-md-3">
                <div class="card">
                  @php
                    $i = 1;
                  @endphp
                  @foreach ($product->images as $images)
                    @if ($i > 0)
                      <img class="card-img-top feature-img" src="{{asset('images/products/'.$images->image)}}" alt="Card image">
                    @endif
                    @php
                      $i--;
                    @endphp
                  @endforeach
                  <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">Price - {{$product->price}} tk</p>
                    <a href="#" class="btn btn-outline-success">Add To Cart</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Sidebar and Content -->
@endsection
