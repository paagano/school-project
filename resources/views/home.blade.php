@extends('layouts.app')

@section('content')
    <h1 class="{{ 'first-heading display-5' }}">Welcome to KTC | Kenya Trail Cast</h1>
    <h1 class="{{ 'first-heading display-6' }}">Your Best Travel Directory & Guide About KENYA</h1>
    <h6 class="{{ 'first-heading display-6' }}"><small><span><a href="/signup">Create Account to Discover More!</a></span></small></h6>

     <div class="first-heading">
            <small>Registered Member?</small>
            <div>
              <small><span><a href="/login">Sign In</a></span></small>
            </div>
        </div>

    <!--SLIDING IMAGE/CAROUSEL-->
    <div class="container">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item" data-bs-interval="10000">
      <img src="{{ 'images\diani.jpg' }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ 'images\hot-air.jpg' }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item active">
      <img src="{{ 'images\amboseli-elephant.jpg' }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
    <!--END SLIDING IMAGE-->

  <div class="container ratio ratio-16x9 mt-4">
    <iframe width="1000" height="500" src="https://www.youtube.com/embed/gTEXJsw62iU" title="KENYA | Discover Pure Beauty of Mother Nature" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

    <!--MAIN CONTENT SECTION-->
  <div class="featured">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
  <div class="col">
    <div class="card h-100">
      <img src="images\amboseli-elephant.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Reviews: 53</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images\hot-air.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Reviews: 106</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images\download.jfif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Reviews: 116</small>
      </div>
    </div>
  </div>
</div>
</div>


@endsection