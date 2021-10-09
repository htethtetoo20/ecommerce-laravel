@extends("master")
@section("content")




    <div class="container">



            <h3 class="mt-3 text-center">Results for Products</h3>

                @foreach($products as $item)

                    <div class="text-center">
                        <a href="/detail/{{$item["id"]}}">
                            <img src="{{$item["gallery"]}}" class="search-items" alt="gallery">
                        </a>

                    <h4 class="text-dark ">{{$item["name"]}}</h4>
                    <h5 class="text-dark">{{$item["category"]}}</h5>
                    <h5 class="text-dark ">{{$item["price"]}}</h5>
                    </div>

                @endforeach
    </div>
@endsection



