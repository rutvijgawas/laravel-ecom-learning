<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    function show($id)
    {
        $product = Product::find($id);
        $cart = Cart::where('product_id', $id)->first();
        $cartStatus = 0;
        if($cart)
        {
            $cartStatus = 1;
        }
        return view('productDetails', ['product' => $product, 'cart_status' => $cartStatus]);
    }

    function search(Request $request)
    {
        $search = $request->input('query');
        $products = Product::where('name', 'like', '%' . $search . '%')
        ->orWhere('category', 'like', '%' . $search . '%')
        ->get();
        return view('search', ['products' => $products, 'search' => $search]);
    }
}
