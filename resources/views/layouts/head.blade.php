<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Brand Logo -->
  <a class="navbar-brand" href="#">
    <img class="logo" src="{{ url('logo.png') }}" alt="">
  </a>
  <!-- Links -->
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/index') }}">Home</a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Service</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Service 1</a>
        <a class="dropdown-item" href="#">Service 2</a>
        <a class="dropdown-item" href="#">Service 3</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/about') }}">About</a>
    </li>
  </ul>
  <div class="form-inline my-2 my-lg-0">
    <a href="{{ url('/masuk')}}" class="btn btn-primary">Login</a>
  </div>
</nav>