@extends("master")
@section("content")
    <div class="container custom-product">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                @foreach($products as $item)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$item["id"]-1}}" class="{{$item["id"]==1?"active":""}}" aria-current="true" aria-label="Slide 1"></button>
                    @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($products as $item)
                <div class="carousel-item {{$item["id"]==1? "active":""}}">
                    <a href="/detail/{{$item["id"]}}">
                    <img src="{{$item["gallery"]}}" class="slider-img d-block " alt="gallery">
                    <div class="carousel-caption slider-text">
                        <h3 class="text-dark">{{$item["name"]}}</h3>
                        <p class="text-dark">{{$item["description"]}}</p>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h3>Trending Products</h3>

        @foreach($products as $item)
            <div class="trending-item me-4">
                <a href="/detail/{{$item["id"]}}">
                <img src="{{$item["gallery"]}}" class="trending-img d-block " alt="gallery">
                </a>
                    <h4 class="text-dark text-center">{{$item["name"]}}</h4>
            </div>
        @endforeach

    </div>
    <div class="clearfix"></div>


@endsection
