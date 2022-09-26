<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $random = Product::inRandomOrder()->get();

        return view('home', compact('random'));
    }
}
