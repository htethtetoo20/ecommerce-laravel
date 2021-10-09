@extends("master")
@section("content")

<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <img class="ms-3 detail-img "src="{{$product["gallery"]}}" alt="image">
    </div>
    <div class="col-md-6 ms-md-0 col-sm-6 col-xs-12 ms-4  ms-sm-0">
       <br><br>
        <a href="/">Go Back</a><br><br>
        <h2>{{$product["name"]}}</h2><br>
        <h3>Price:{{$product["price"]}}</h3><br>
        <h4>Details:{{$product["description"]}}</h4><br>
        <h5>Category:{{$product["category"]}}</h5><br>
        <form action="/cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$product["id"]}}">
            <button class="btn btn-primary" type="submit">Add to Cart</button>
        </form><br><br>
        <button class="btn btn-success">Buy now</button>

    </div>

</div>

@endsection
