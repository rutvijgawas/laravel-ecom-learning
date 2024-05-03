<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Session;

class OrderController extends Controller
{
    //
    public function orderNow()
    {
        $userId = Session::get('user')['id'];
        $totalPrice = Cart::where('user_id', $userId)
                    ->join('products', 'carts.product_id', '=', 'products.id')
                    ->sum('products.price');

        return view('order-now', ['totalPrice' => $totalPrice]);
    }

    public function placeOrder(Request $request)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order();
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $request->payment;
            $order->payment_status = 'pending';
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $request->input();
        return redirect('/');
    }

    public function myOrders()
    {
        $userId = Session::get('user')['id'];
        $orders = Order::where('user_id', $userId)
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->select('products.*','orders.id as orderId', 'orders.status as order_status', 'orders.payment_method as payment', 'orders.payment_status as payment_status', 'orders.address')
        ->get();
        return view('my-orders', ['orders' => $orders]);
    }

    Public function cancelOrder($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/my-orders');
    }
}
