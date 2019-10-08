@extends('master')
@section('content')

<!-- Carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="carousel-img" src="{{ url('chicago.jpg') }}" alt="">
    </div>
    <div class="carousel-item">
      <img class="carousel-img" src="{{ url('la.jpg') }}" alt="">
    </div>
    <div class="carousel-item">
      <img class="carousel-img" src="{{ url('ny.jpg') }}" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<!-- /Carousel -->

<!-- Card -->
<div class="card" style="width:400px">
  <img class="card-img-top" src="{{url('john-doe.png')}}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Hi! I'm John Doe.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
<!-- /Card -->

@endsection