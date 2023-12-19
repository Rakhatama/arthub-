@extends('layout.main')

@section('main')
<div class="home container">
    <h1 class="home-title">ArtHub</h1>
<h1 class="trending-item fs-5 fw-regular mt-3 mb-3">Painting</h1>
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
</div>
</div>
@endsection