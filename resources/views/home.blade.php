@extends('layouts.app')

@section('content')
    <h1 class="{{ 'first-heading' }}">Welcome to my laravel school project</h1>

    <!--SLIDING IMAGE/CAROUSEL-->
    <div class="container my-5">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner" style="height: 400px">
          <div class="carousel-item active">
            <img
              src="{{ url('images\amboseli-elephant.jpg') }}"
              class="{{ 'd-block w-100 img-fluid' }}"
              alt="{{ 'elephant' }}"
            />
          </div>
          <div class="carousel-item">
            <img
              src="{{ url('images\download.jfif') }}"
              class="d-block w-100 img-fluid"
              alt="maasai-mara-giraffes"
            />
          </div>
          <div class="carousel-item">
            <img
              src="{{ url('images\Kenya12.jpg') }}"
              class="{{ 'd-block w-100 img-fluid' }}"
              alt="{{ 'beautiful-kenya' }}"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!--END SLIDING IMAGE-->

    <!--MAIN CONTENT SECTION-->
    <div class="container mb-3" id="main-body">
      
      <div class="row">
        <div class="col">
          <div
            class="bg-primary p-4 border border-5 border-success rounded just"
          >
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni,
            molestias consectetur! Cum, expedita ipsa maiores suscipit ex
            obcaecati quae iusto fugiat vitae laboriosam, natus similique culpa
            magnam animi illo, accusamus odio? Error pariatur laboriosam
            ducimus, officiis ratione porro iure voluptatibus odit explicabo
            iusto quia enim voluptates! Recusandae quam cupiditate sint?
          </div>
        </div>
        <div class="col">
          <div
            class="bg-success p-4 border border-5 border-primary rounded just"
          >
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni,
            molestias consectetur! Cum, expedita ipsa maiores suscipit ex
            obcaecati quae iusto fugiat vitae laboriosam, natus similique culpa
            magnam animi illo, accusamus odio? Error pariatur laboriosam
            ducimus, officiis ratione porro iure voluptatibus odit explicabo
            iusto quia enim voluptates! Recusandae quam cupiditate sint?
          </div>
        </div>
        <div class="col">
          <div
            class="bg-primary p-4 border border-5 border-success rounded just"
          >
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni,
            molestias consectetur! Cum, expedita ipsa maiores suscipit ex
            obcaecati quae iusto fugiat vitae laboriosam, natus similique culpa
            magnam animi illo, accusamus odio? Error pariatur laboriosam
            ducimus, officiis ratione porro iure voluptatibus odit explicabo
            iusto quia enim voluptates! Recusandae quam cupiditate sint?
          </div>
        </div>
      </div>
    </div>


@endsection