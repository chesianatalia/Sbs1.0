  <nav class="
        navbar navbar-expand-lg navbar-light navbar-store sticky-top
      ">
    <div class=" container">
      <div class="nav-bar-text-decoration">
        <a href="{{ route('profile') }}" class="categories-text">
          <img src= "{{ asset('/Images/logo.svg') }}" alt="">
          Hello, Chesia Natalia!
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('add') }}" class="nav-link">Add</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('favorite') }}" class="nav-link">Favorite</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('login') }}"class="nav-link">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>