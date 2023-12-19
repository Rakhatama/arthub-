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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/paintings">Painting</a></li>
            <li><a class="dropdown-item" href="/crafting">Crafting</a></li>
            <li><a class="dropdown-item" href="/other">Other</a></li>
          </ul>
        </li>
        <li>
            <div class="container-fluid">
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            </div>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li>
            <h2 class="icons bi-cart-fill"><a href="/checkouts"> Transactions History</a></h2>
        </li>
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
            <h2 class="icons bi-person-fill"></h2>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->
@yield('main')


<!-- footer -->

<footer class="footer container-fluid">
<div class="row d-flex justify-content-start align-items-center">
    <div class="col mt-2 p-3">
      <h1 class="heading">OUR COMPANY</h1>
      <a href="/aboutus">About Us</a><br>
      <a href="/blog">Blog</a>
    </div>
    <div class="col mt-2 p-3">
    <h1 class="heading">BUSINESS</h1>
    <a href="/openstore">Open your Own Store</a>
    </div>
    <div class="col mt-2 p-3">
    <h1 class="heading">CONTACT US</h1>
    <a href="/contactus">Customer Service</a>
    </div>
    <div class="col mt-2 p-3">
    <h1 class="heading">Payment Method</h1>
    <div class="pay">
    <img src="img/image 46.png" class="img-fluid" alt="qris">
    <img src="img/image 45.png" class="img-fluid" alt="ovo">
    </div>
    </div>
  </div>
</footer>
<div class="endfoot container-fluid"></div>
<!-- footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>