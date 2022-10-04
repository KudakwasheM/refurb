<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->input('productId'));

        Cart::add(
            $product->id,
            $product->name,
            1,
            $product->price,
            $product->weight
        );

        return redirect()->back()->with('success', 'Successfully Added');
    }

    public function myCart()
    {
        $user = Auth::user();
        $cart = Cart::content();

        return view('cart.cart', compact('user', 'cart'));
    }
}
