<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">Laravel Ecommerce</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/my-orders">Orders({{ session()->has('ordersCount') ? session()->get('ordersCount') : 0 }})</a>
        </li>
      </ul>
      <!-- Add a conditional block to check if the user is logged in -->
      <form class="d-flex" action="{{ route('search') }}" role="search">
        <input class="form-control me-2 search-box" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <button class="btn btn-outline-primary ms-2" type="button" onclick="window.location.href ='{{ route('cart') }}'" >Cart({{ session()->has('cartCount') ? session()->get('cartCount') : 0 }})</button>
      @if(session()->has('user'))
        <div class="dropdown  ms-2">
          <button class="btn btn-outline-secondary dropdown-toggle me-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          {{ session()->get('user')['name'] }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </div>
      @else
        <a href="{{ route('login') }}" class="btn btn-outline-primary ms-2 me-2">Login</a>
      @endif
    </div>
  </div>
</nav>
