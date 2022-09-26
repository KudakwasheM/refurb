<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

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

    public function my_cart()
    {
        $cart = Cart::content();

        dd($cart);

        return view('cart.cart', compact('cart'));
    }
}
