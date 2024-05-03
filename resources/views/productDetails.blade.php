@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 mt-3">
            <img  class="detail-img" src="{{ $product->gallery }}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <br>
            <h2>Name: {{ $product->name }}</h2>
            <h3>Price: {{ $product->price }}</h3>
            <h4>Details: {{ $product->description }}</h4>
            <h5>Category: {{ $product->category }}</h5>
            <br><br>
            @if($cart_status == 1)
                <button class="btn btn-warning" onclick="window.location.href='/cart'">Added to Cart</button>
            @else
                <form action="/add-to-cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value={{ $product->id }}>
                    <button class="btn btn-primary" type="submit">Add to Cart</button>
                </form>
            @endif
            <br><br>
            <button class="btn btn-success">Buy Now</button>

        </div>
    </div>
</div>

@endsection