@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h1>Cart List</h1>
            <a href="/order-now" class="btn btn-success mb-6">Order Now</a>
            <div class="">
                @foreach($cartProducts as $key => $item)
                <div class="row mt-2 border border-primary rounded p-3" >
                    <div class="col-sm-3">
                        <a href="product/{{$item['id']}}">
                            <div class="">
                                <img src="{{$item['gallery']}}" class="trending-img" class="d-block w-100" alt="...">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                            <h5>{{$item->price}}</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-warning"><a href="remove-from-cart/{{$item->cartId}}">Remove from cart
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection