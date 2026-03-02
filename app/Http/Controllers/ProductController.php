<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store()
    {
        $product = new Product();
        $product->name = request('name');
        $product->price = (float) request('price');
        $product->save();

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('product', ['id' => $id, 'product' => Product::find($id)]);
    }
}
