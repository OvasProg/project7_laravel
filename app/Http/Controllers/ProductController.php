<?php

namespace App\Http\Controllers;

use App\FakeDB\ProductDB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products', ['products' => ProductDB::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $name = request('name');
        $price = (float) request('price');

        ProductDB::add($name, $price);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('product', ['id' => $id, 'product' => ProductDB::find($id)]);
    }
}
