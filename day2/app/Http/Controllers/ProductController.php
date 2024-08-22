<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products=Product::all();
       return view('products/index',['products'=>$products]);

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
    public function store(Request $request)
    {
         $product =new Product();
         $product->product_name=$request->product_name;
         $product->product_description=$request->product_description;
         $product->product_price=$request->product_price;
         $product->save();
         return response("done");
        // return view('products.index');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Product $product)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $product = Product::findOrFail($id);
    return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_description' => 'nullable|string',
            'product_price' => 'required|numeric|min:0',
        ]);
    
        $product = Product::findOrFail($id);
        $product->product_name = $validatedData['product_name'];
        $product->product_description = $validatedData['product_description'];
        $product->product_price = $validatedData['product_price'];
        $product->save();
    
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
    
}
