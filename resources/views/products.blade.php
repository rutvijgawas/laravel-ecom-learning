@extends('master')
@section('content')
<div class="custom-product">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            @foreach($products as $key => $item)
            <div class="carousel-item {{ $key== 0 ? 'active' : '' }}">  
                <a href="product/{{$item->id}}">
                    <img src="{{$item['gallery']}}" class="slider-img" class="d-block w-100" alt="...">
                    <div class="carousel-caption slider-text">
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->description}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="trending-wrapper">
        <h1>Trending Products</h1>
        <div class="">
            @foreach($products as $key => $item)
            <a href="product/{{$item->id}}">
                <div class="trending-item">
                    <img src="{{$item['gallery']}}" class="trending-img" class="d-block w-100" alt="...">
                        <h3>{{$item->name}}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

@endsection