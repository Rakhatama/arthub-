@extends('layout.main')

@section('main')
<!-- <div class="container-fluid d-flex align-items-center justify-content-center mt-3 border">
<h1 class="fw-bold fs-1">My Profile</h1>
</div> --> 
            <div class="d-flex align-items-center justify-content-center border border border border-top-0 border-start-0 border-4 rounded ms-5 me-5 mt-3 p-3 mb-3 flex-column">
            <h1 class="fw-bold fs-1">Biodata</h1>
            <div class="profile-img text-center">
            <img src="img/profile.png" class="image img-fluid rounded" alt="profile">
            </div>
            <p class="fw-semi fs-2">{{auth()->user()->name}}</p>
            <p class="fw-semi fs-2">{{auth()->user()->email}}</p>
            </div>
      
<!-- <div class="MyProfile d-flex align-items-center justify-content-start">
    <p class="profile-text fw-bold">Email : </p>
    <div class="border border-light border-2 rounded p-2 m-2"><p class="profile-text">{{auth()->user()->email}}</p></div>
</div> -->

<!-- <div class="MyProfile d-flex align-items-center justify-content-start">
    <p class="profile-text fw-bold">Status </p>
    <div class="border border-light border-2 rounded p-2 m-2"><p class="profile-text">{{auth()->user()->email}}</p></div>
</div> -->



<div class="container-fluid d-flex align-items- justify-content-center mb-5 mt-3">
<form action="/logout" method="post">
    @csrf
    <button type="submit" class="btn btn-danger btn-lg bi bi-box-arrow-in-right">Log Out</button>
</form>
</div>
@endsection