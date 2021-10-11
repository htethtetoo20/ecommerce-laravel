@extends("master")
@section("content")
    <div class="container">
        <h3 class="mt-3 text-center">Cart Lists</h3>
        @foreach($products as $item)
            <div class="row border" >

                <div class="col">
                    <a href="/detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" class="order-items" alt="gallery">
                    </a>
                </div>
                <div class="col align-self-center ">
                    <h4 class="text-dark.order-font-size text-start">Name:{{$item->name}}</h4>
                    <p class="text-dark order-font-size text-start">Delivery Status:{{$item->status}}</p>
                    <p class="text-dark order-font-size text-start">Address:{{$item->address}}</p>
                    <p class="text-dark order-font-size text-start">Payment Status:{{$item->payment_status}}</p>
                    <p class="text-dark order-font-size text-start">Payment Method:{{$item->payment_method}}</p>
                </div>

            </div>
        @endforeach
    </div>
@endsection
