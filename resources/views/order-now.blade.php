@extends('master')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .custom-product {
        margin-top: 50px;
    }

    .table {
        background-color: #fff;
    }

    .form-control {
        width: 100%;
    }

    .justify-content-center {
        text-align: center;
    }

    .mb-3 {
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #FF9900;
        border-color: #FF9900;
    }

    .btn-primary:hover {
        background-color: #FF8C00;
        border-color: #FF8C00;
    }
</style>
@section('content')
<div class="container">
    <div class="custom-product">
        <div class="col-sm-10 mx-auto">
            <table class="table table-striped table-bordered table-hover table-responsive">
                <tbody>
                    <tr>
                        <th scope="row">AMOUNT</th>
                        <td>INR {{ $totalPrice }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tax</th>
                        <td>INR 0</td>
                    </tr>
                    <tr>
                        <th scope="row">Delivery</th>
                        <td>INR 10</td>
                    </tr>
                    <tr>
                        <th scope="row">Total Amount</th>
                        <td>INR {{ $totalPrice + 10 }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="justify-content-center">
                <form action="/place-order" method="post">
                    @csrf    
                    <div class="mb-3">
                        <label for="address" class="form-label">Delivery Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your delivery address"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Payment method</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="cod_payment" value="COD">
                            <label class="form-check-label" for="cod_payment">COD</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="emi_payment" value="EMI">
                            <label class="form-check-label" for="emi_payment">EMI Payment</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="netbanking_payment" value="Net Banking">
                            <label class="form-check-label" for="netbanking_payment">Net Banking</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="wallet_payment" value="Wallet">
                            <label class="form-check-label" for="wallet_payment">Wallet</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Place Order</button>
                </form>
            </div>
        </div>
    </div>
</div

@endsection