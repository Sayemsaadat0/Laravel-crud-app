<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // to show the data
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }


    // Form Handling
    public function create()
    {
        return view('products.create');
    }


    // form action 
    public function store(Request $request)
    {
        $data = $request->validate(([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]));
        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }


    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product,  Request $request)
    {
        // return view('products.edit');
        $data = $request->validate(([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]));
        // dd($data);
        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');
    }
}