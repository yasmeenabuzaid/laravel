<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('Products.index', compact('products'));
        // A function used to create an array containing the variables to which you pass it, where the variable name is the key in the array and the value of the variable is its corresponding value. This function is very useful in sending data to view in an organized and easy waycompact.
    }

    public function create()
    {
        return view('Products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        Products::create($request->all());
        return redirect()->route('Products.index');
    }

    public function show(Products $products)
    {
        return view('Products.show', compact('products'));
    }

    public function edit(Products $products)
    {
        return view('Products.edit', compact('products'));
    }

    public function update(Request $request, Products $products)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);

        $products->update($request->all());
        return redirect()->route('Products.index');
    }

    public function destroy(Products $products)
    {
        $products->delete();
        return redirect()->route('Products.index');
    }
}
