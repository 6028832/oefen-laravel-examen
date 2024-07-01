<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Redirect;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.products', ['products' => $products]);
    }
    public function show(Product $product)
    {
        return view('products.product', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

/**
 * Store a newly created resource in storage.
 */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->code = $request->input('code');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->code = $request->input('code');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');

        $product->save();

        return redirect()->route('products.show', $product->id)->with('success', 'Product updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');

    }
}
