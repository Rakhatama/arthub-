@extends('layout.main')

@section('main')
<div class="login container border border-top-0 border-start-0 border-4 rounded">
    <h1 class="fw-bold fs-4">Login</h1>
    <form action="/login" method="post">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
    {{session('success')}}
    </div>
    @endif
    @if(session()->has('loginError'))
    <div class="alert alert-danger" role="alert">
    {{session('loginError')}}
    </div>
    @endif
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Email" autofocus required>  
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password"  name="password"  class="form-control" id="password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
        <div class="tidakPunyaAkun mt-3 mb-3">Dont Have an Account?<a href="/register"> Register Here</a></div>
      </form>
</div>
@endsection