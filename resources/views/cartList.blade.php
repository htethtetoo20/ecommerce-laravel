
@extends("master")
@section("content")
    <div class="container">
        <h3 class="mt-3 text-center">Cart Lists</h3>
        @foreach($products as $item)
        <div class="row border" >
                <div class="col">
                    <a href="/detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" class="cart-items" alt="gallery">
                    </a>
                </div>
                 <div class="col align-self-center">
                    <h4 class="text-dark font-size text-center">{{$item->name}}</h4>
                    <h5 class="text-dark font-size text-center">{{$item->category}}</h5>
                </div>
                <div class="col align-self-center">
                    <h5 class="text-dark font-size text-center">$ {{$item->price}}</h5>
                </div>
                <div class="col align-self-center">
                    <a class="btn btn-warning" href="/remove/{{$item->cart_id}}">Remove</a>
                </div>
        </div>
        @endforeach
            <div class="text-center mt-3">
                <a type="button" class="btn btn-success" href="/orderNow">Order Now</a>
            </div>
    </div>

@endsection


