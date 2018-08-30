@extends('layouts.master')

@section('content')
  <!-- Start Sidebar and Content -->
  <div class="container margin-top-20">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">First item</a>
          <a href="#" class="list-group-item list-group-item-action">Second item</a>
          <a href="#" class="list-group-item list-group-item-action">Third item</a>
        </div>
      </div>

      <div class="col-md-9">
        <div class="widget">
          <h3>Featured Products</h3>
          <div class="row">

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{asset('images/products/'.'samsung-galaxy-s9.jpg')}}" alt="Card image">
                <div class="card-body">
                  <h5 class="card-title">Redmi Note 1</h5>
                  <p class="card-text">Price - 15,000 tk</p>
                  <a href="#" class="btn btn-outline-success">Add To Cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{asset('images/products/'.'samsung-galaxy-s8.jpeg')}}" alt="Card image">
                <div class="card-body">
                  <h5 class="card-title">Redmi Note 2</h5>
                  <p class="card-text">Price - 19,990 tk</p>
                  <a href="#" class="btn btn-outline-success">Add To Cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{asset('images/products/'.'samsung-galaxy-s9.jpg')}}" alt="Card image">
                <div class="card-body">
                  <h5 class="card-title">Redmi Note 3</h5>
                  <p class="card-text">Price - 21,500 tk</p>
                  <a href="#" class="btn btn-outline-success">Add To Cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{asset('images/products/'.'samsung-galaxy-s8.jpeg')}}" alt="Card image">
                <div class="card-body">
                  <h5 class="card-title">Redmi Note 4</h5>
                  <p class="card-text">Price - 25,990 tk</p>
                  <a href="#" class="btn btn-outline-success">Add To Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Sidebar and Content -->
@endsection
