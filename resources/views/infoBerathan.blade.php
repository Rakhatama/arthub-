@extends('layout.main')

@section('main')
<div class="container">
    <div class="row">
        <div class="col mt-3 ms-5 p-3 mb-3">
        <img src="img/ulun-danu.jpg" class="img-fluid img-thumbnail" alt="...">
        </div>
        <div class="col mt-3 p-3 mb-3">
         <h1 class="aboutus fw-bold fs-2">Beratan Lake Photography</h1><br>
         <p class=text-danger>Stock: 1</p>
         <h2 class="aboutus fw-bold fs-4">Rp2.000.000</h2>
         <h2 class="aboutus fw-regular fs-6">Description</h2>
         <p>Photo of Beratan Lake in Bali taken by famous photographer.<br>Creator: Rakhatama</p>
         <a class="btn btn-primary bi-bag-check" href="/checkouts/create" role="button"> Check Out</a>
        </div>
    </div>
</div>
@endsection