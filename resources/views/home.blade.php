@extends('layout.main')

@section('main')
<div class="home container">
    <h1 class="home-title">ArtHub</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Starry_Night.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/pura.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h1 class="trending-item fs-5 fw-regular mt-3 mb-3">Trending Items</h1>
<div class="container-fluid d-flex justify-content-center align-items-center">
<div class="card m-3" style="width: 12rem;">
  <img src="img/img-star1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <a class="card-text" href="/infoStarry">The Starry Night</a><br>
    <p class="card-text fw-bold">Rp 50.000.000</p>
  </div>
</div>
<div class="card m-3" style="width: 12rem;">
  <img src="img/img-star2.png" class="card-img-top" alt="...">
  <div class="card-body">
  <a class="card-text" href="/infoMona">Mona lisa</a><br>
    <p class="card-text fw-bold">Rp 30.000.000</p>
  </div>
</div>
<div class="card m-3" style="width: 12rem;">
  <img src="img/img-star3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <a class="card-text" href="/infoPatung">Patung Ganesha</a><br>
    <p class="card-text fw-bold">Rp 5.000.000</p>
  </div>
</div>
<div class="card m-3" style="width: 12rem;">
  <img src="img/img-star4.png" class="card-img-top" alt="...">
  <div class="card-body">
    <a class="card-text" href="/infoBerathan">Berathan Lake Photography</a><br>
    <p class="card-text fw-bold">Rp 2.000.000</p>
  </div>
</div>
</div>
</div>
@endsection