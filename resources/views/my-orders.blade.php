@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h1>Orders List</h1>
            <div class="">
                @foreach($orders as $key => $item)
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
                            <h5>Delivery status: {{$item->order_status}}</h5>
                            <h5>Payment method: {{$item->payment_status}}</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-warning"><a href="cancel-orders/{{$item->orderId}}">Cancel Order
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection