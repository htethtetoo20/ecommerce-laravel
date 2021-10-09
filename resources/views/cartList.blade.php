
@extends("master")
@section("content")




    <div class="container">
        <h3 class="mt-3 text-center">Cart Lists</h3>
        @foreach($products as $item)
        <div class="row border colgap" >

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
                    <h5 class="text-dark font-size text-center">{{$item->price}}</h5>
                </div>
            <div class="col align-self-center">
                <btn class="btn btn-primary">Remove</btn>
            </div>
        </div>
        @endforeach

    </div>
@endsection


