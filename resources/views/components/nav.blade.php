<style>
  nav{
    background:#131921 !important;
    
  }

  .nav-item{
    position: relative
  }

  .number{
    position: absolute;
    top: 20%;
    left: 50%;
    color: white !important;
    transform: translate(-50%,-50%)
  }


  .dropdown-menu:hover a{
    color:black !important;
  }



</style>
<nav class="navbar navbar-expand-lg" style="top:0;z-index:222;width:100%">
  <div class="container-fluid">
    <a class="text-white navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="text-white nav-link" aria-current="page" href="#">Home</a>
        </li>
        @guest
            
        <li class="nav-item">
          <a class="text-white nav-link" href="#">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="#">Sign In</a>
        </li>
        @endguest
        <li class="nav-item">
          <a class="text-white nav-link" href="">Add Products</a>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="#">Add Categories</a>
        </li>
        <li class="nav-item">
          <div class="number">
            0
          </div>
          <a class="text-white nav-link" href="#"><i class="bi bi-cart3 fs-5"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" style='background:#0202FF'>
            <li><a class="text-white dropdown-item" href="#">Action</a></li>
            <li><a class="text-white dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="text-white dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        @auth
        <li class="nav-item">
          <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-danger" href="#">Logout</button>
          </form>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>