<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\cart;

class CartController extends Controller
{
    //

    public function index(Request $request)
    {
        $user = $request->session()->get('user');

        $cartProducts = cart::where('user_id', $user->id)
        ->join('products', 'carts.product_id', '=', 'products.id')
        ->select('carts.id as cartId', 'products.*')
        ->get();

        return view('cart-list', ['cartProducts' => $cartProducts]);
    }

    function addToCart(Request $request)
    {
    
        if(!$request->session()->has('user'))
        {
            return redirect('/login');
        }

        $userCart = Cart::where('user_id', $request->session()->get('user')['id'])->where('product_id', $request->product_id)->get();
        
        if(count($userCart) > 0)
        {
            return redirect()->back()->withErrors('error', 'Already added to cart');
        }

        $insertIntoCart = Cart::insert([
            'user_id' => $request->session()->get('user')['id'],
            'product_id' => $request->product_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        if(!$insertIntoCart)
        {
            return redirect()->back()->withErrors('error', 'Something went wrong');
        }

        //reload page with message
        return redirect()->back()->with('message', 'Added to Cart');
    }

    public function removeFromCart($id)
    {
        $removeFromCart = Cart::destroy($id);
        return redirect()->back()->with('message', 'Removed from cart');
    }
}
