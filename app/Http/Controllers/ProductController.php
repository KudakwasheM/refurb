<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $validator = Validator::make(
            [
                'name' => 'required|max:255',
                'brand' => 'required',
                'drive' => 'required',
                'storage' => 'required',
                'ram' => 'required',
                'price' => 'required',
                'screen' => 'required',
                'description' => 'required',
                'processor' => 'required',
            ],
            [
                'name.required' => 'Name of Product is Required',
                'drive.required' => 'Drive Is Required',
                'brand.required' => 'Brand Is Required',
                'storage.required' => 'Storage Size Is Required',
                'ram.required' => 'Ram Is Required',
                'price.required' => 'Price Is Required',
                'screen.required' => 'Screen Size Is Required',
                'desription.required' => 'Product description Is Required',
                'processor.required' => 'Processor Is Required',
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $product->name = $request['name'];
            $product->brand = $request['brand'];
            $product->drive = $request['drive'];
            $product->processor = $request['processor'];
            $product->color = $request['color'];
            $product->storage = $request['storage'];
            $product->ram = $request['ram'];
            $product->quantity = $request['quantity'];
            $product->price = $request['price'];
            $product->weight = $request['weight'];
            $product->screen = $request['screen'];
            $product->description = $request['description'];
            $product->y_o_m = $request['y_o_m'];
            $product->additionals = $request['additionals'];
            $product->created_by = Auth::user()->name;

            if ($request->hasFile('images')) {
                $product->images = $request->file('images')->store('products', 'public');
            }

            $product->save();

            if ($product->save()) {
                return redirect()->back()->with('success', 'Product Saved Successfully!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
