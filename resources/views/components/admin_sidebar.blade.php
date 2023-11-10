<style>
    
  a{
    transition: all 0.5s;
  }
  a:hover{
    background: gray!important;
  }
</style>
<div style="height: 100vh;background:#131921"  class="text-white position-sticky top-0 w-25">
    <h4 class="text-center my-2">
        Welcome Admin
    </h4>
    <hr>
    <a href="/" class="fs-2 d-flex nav-link">
        <div class="icon"><i class="me-3 bi bi-house"></i></div>
        <div class="text">Home</div>
    </a>
    <a href="/add-product" class="fs-2 d-flex nav-link">
        <div class="icon"><i class="me-3 bi bi-bag-plus"></i></div>
        <div class="text">Add Product</div>
    </a>
    <a href="/add-category" class="fs-2 d-flex nav-link">
        <div class="icon"><i class="me-3 bi bi-bookmark-star"></i></div>
        <div class="text">Add Category</div>
    </a>
    <a href="" class="fs-2 d-flex nav-link">
        <div class="icon"><i class="me-3 bi bi-person"></i></div>
        <div class="text">Add Admins</div>
    </a>
    <a href="" class="fs-2 d-flex nav-link">
        <div class="icon"><i class="me-3 bi bi-people"></i></div>
        <div class="text">View Users</div>
    </a>
    <a href="" class="fs-2 d-flex nav-link">
        <div class="icon"><i class="me-3 bi bi-pencil-square"></i></div>
        <div class="text">Update Order</div>
    </a>
    
    <div class="dropdown">
        <div class="dropdown-toggle fs-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="icon"><i class="bi bi-graph-up"></i></span>
            <span class="text">Analytics</span>
        </div>
        <ul class="dropdown-menu ms-5">
          <li><a class="dropdown-item" href="#">User Analytics</a></li>
          <li><a class="dropdown-item" href="/product-analytics">Product Analytics</a></li>
          <li><a class="dropdown-item" href="#">Category Analytics</a></li>
        </ul>
      </div>

</div>