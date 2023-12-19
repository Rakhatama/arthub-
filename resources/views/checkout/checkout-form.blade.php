<!DOCTYPE html>
<html lang="en">
<head>
<!-- navbar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg border-bottom border-2 border-primary-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">ArtHub</a>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/profile">MyProfile</a></li>
          </ul>
        </li>
        <li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        @endauth
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
        <h1>CheckOut</h1>
        <hr>
        <form action="{{route('checkouts.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                @error('email')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}">
                @error('nama')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3">{{old('alamat')}}</textarea>
            </div>
            
            <div class="form-group">
                <label for="order">Order</label>
                <select class="form-control" name="order" id="order">
                <option value="Mona Lisa">
                    Mona Lisa
                </option>
                <option value="The Starry Night">
                    The Starry Night
                </option>
                <option value="Patung Ganesha">
                    Patung Ganesha
                </option>
                <option value="Berathan Lake Photography">
                Berathan Lake Photography
                </option>
                </select>
                @error('order')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="qty">Quantity</label>
                <input type="text" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" value="{{old('qty')}}">
                @error('qty')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-2">Check Out</button>
    </form>
</div>
