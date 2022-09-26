<?php

namespace App\Http\Controllers;

// use App\Models\Product;
// use Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // $random = Product::inRandomOrder()->get();
        // $cart = Cart::content();

        return view('home');
    }
}
