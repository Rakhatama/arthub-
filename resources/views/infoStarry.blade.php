@extends('layout.main')

@section('main')
<div class="container">
    <div class="row">
        <div class="col mt-3 ms-5 p-3 mb-3">
        <img src="img/starry-info.jpg" class="img-fluid img-thumbnail" alt="...">
        </div>
        <div class="col mt-3 p-3 mb-3">
         <h1 class="aboutus fw-bold fs-2">The Starry Night</h1><br>
         <p class=text-danger>Stock: 1</p>
         <h2 class="aboutus fw-bold fs-4">Rp50.000.000</h2>
         <h2 class="aboutus fw-regular fs-6">Description</h2>
         <p>Starry Night is an oil painting on canvas by the Dutch post-Impressionist painter.<br>Creator: Vincent van Gogh</p>
         <a class="btn btn-primary bi-bag-check" href="/checkouts/create" role="button"> Check Out</a>
        </div>
    </div>
</div>
@endsection