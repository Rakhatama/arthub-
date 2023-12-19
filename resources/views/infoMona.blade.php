@extends('layout.main')

@section('main')
<div class="container">
    <div class="row">
        <div class="col mt-3 ms-5 p-3 mb-3">
        <img src="img/monalisa.jpeg" class="img-fluid img-thumbnail" alt="...">
        </div>
        <div class="col mt-3 p-3 mb-3">
         <h1 class="aboutus fw-bold fs-2">Mona Lisa</h1><br>
         <p class=text-danger>Stock: 1</p>
         <h2 class="aboutus fw-bold fs-4">Rp30.000.000</h2>
         <h2 class="aboutus fw-regular fs-6">Description</h2>
         <p>The Mona Lisa is a popular oil on wood painting created by Leonardo da Vinci in the 16th century.<br>Creator: Leonardo Davinci</p>
         <a class="btn btn-primary bi-bag-check" href="/checkouts/create" role="button"> Check Out</a>
        </div>
    </div>
</div>
@endsection