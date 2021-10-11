@extends("master")
@section("content")

<div class="row">
    <div class="col-sm">
        <img class="ms-3 detail-img "src="{{$product["gallery"]}}" alt="image">
    </div>
    <div class=" col-sm ms-md-0 ms-2 ms-sm-3">
       <br><br>
        <a href="/">Go Back</a><br><br>
        <h2>{{$product["name"]}}</h2><br>
        <h3>Price: $ {{$product["price"]}}</h3><br>
        <h4>Details:{{$product["description"]}}</h4><br>
        <h5>Category:{{$product["category"]}}</h5><br>
        <form action="/cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$product["id"]}}">
            <button class="btn btn-warning" type="submit">Add to Cart</button>
        </form><br><br>
        <button class="btn btn-success">Buy now</button>
    </div>

</div>

@endsection
