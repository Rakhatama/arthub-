@extends('layout.main')

@section('main')
<div class="container">
    <div class="row">
        <div class="col mt-3 ms-5 p-3 mb-3">
        <img src="img/patung-ganesha.jpg" class="img-fluid img-thumbnail" alt="...">
        </div>
        <div class="col mt-3 p-3 mb-3">
         <h1 class="aboutus fw-bold fs-2">Patung Ganesha</h1><br>
         <p class=text-danger>Stock: 10</p>
         <h2 class="aboutus fw-bold fs-4">Rp5.000.000</h2>
         <h2 class="aboutus fw-regular fs-6">Description</h2>
         <p>This Ganesha statue is made of natural stone, Jogja sandstone.<br>Creator: Jogja Statue</p>
         <a class="btn btn-primary bi-bag-check" href="/checkouts/create" role="button"> Check Out</a>
        </div>
    </div>
</div>
@endsection