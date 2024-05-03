<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function __construct(Request $request)
    {
        $user = $request->session()->get('user');
        if($user != null)
        {
            $cartCount = cart::where('user_id', $user->id)->count();
            $ordersCount = Order::where('user_id', $user->id)->count();
            $request->session()->put('cartCount', $cartCount);
            $request->session()->put('ordersCount', $ordersCount);
        }
    }
}
