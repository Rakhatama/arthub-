@extends('layout.main')

@section('main')
<div class="login container border border-top-0 border-start-0 border-4 rounded">
    <h1 class="fw-bold fs-4">Register</h1>
    <form action="/register" method="post">
      @csrf
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Username</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Username" value="{{old('name')}}" autofocus required>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Email" autofocus required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password"  name="password"  class="form-control" id="password" placeholder="Password" required>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
            <label class="form-check-label" for="flexCheckDefault">
                I have read and accepted the Terms and Agreement
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
        <div class="tidakPunyaAkun mt-3 mb-3">Already Have An Account?<a href="/login"> Log In</a></div>
      </form>
</div>
@endsection