
<?php
use App\Http\Controllers\ProductController;

$total=0;
if(Session::has("user"))
   {
       $total=ProductController::cart_item();
   }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-md-1" href="#">Order</a>
                </li>
                <li>

                <form action="/search" class="d-flex">
                    <input class="form-control me-2 " name="query" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                </li>

            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
            <a class="nav-link" href="/cart-list">Cart({{$total}})</a>
                </li>
                @if(Session::has("user"))
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                       {{Session::get("user")["name"]}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item"  href="/logout">Logout</a></li>

                        </li>
                @else
                    <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                    </li>
                @endif

                      </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
