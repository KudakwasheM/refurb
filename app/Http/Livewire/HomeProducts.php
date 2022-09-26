<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;

class HomeProducts extends Component
{

    public array $quantity = [];
    public function render()
    {
        $random = Product::inRandomOrder()->get();
        $cart = Cart::content();

        return view('livewire.home-products', compact('random', 'cart'));
    }

    public function addToCart($id)
    {
    }
}
