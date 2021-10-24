<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>
  @stack('prepend-style')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="{{ url("vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" />
  {{-- <link rel="stylesheet" href="{{ url("Style/Components/categories.css") }}"> --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
  <link href="{{ url("style/main.css") }}" rel="stylesheet" />
  @stack('addon-style')
</head>

<body>
  <nav class="
        navbar navbar-expand-lg navbar-light navbar-store sticky-top
      ">
    <div class=" container">
      <div class="nav-bar-text-decoration">
        <a href="#" class="categories-text">
          <img src="{{ url("Images/admin1.png") }}" alt="logo" />
          Hello, Admin!
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="{{ route('admin-dashboard') }}" class="nav-link">Home</a>
          </li>
           <li class="nav-item">
            <a href="{{ route('post.index') }}" class="nav-link">Post</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link {{ request()->is('admin/category*') ? 'active' : ''}}">Categories</a>
          </li>
          <li class="nav-item">
          <li class="nav-item">
            <a href="#" class="nav-link">Interaction</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link">Users</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{--content --}}
  @yield('content')


  <!-- boodstarp core Javascript-->
  @stack('prepend-script')
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
  <script src="https://unkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  @stack('addon-script')
</body>

</html>