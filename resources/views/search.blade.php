@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-lg-12">
        <div class="trending-wrapper">
            <h1>Result for "{{$search}}" Products</h1>
            <div class="">
                @foreach($products as $key => $item)
                <a href="product/{{$item->id}}">
                    <div class="search-item">
                        <img src="{{$item['gallery']}}" class="trending-img" class="d-block w-100" alt="...">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                            <h5>{{$item->price}}</h5>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection