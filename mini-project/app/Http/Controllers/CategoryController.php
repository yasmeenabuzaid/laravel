<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        $products = Product::all();

        return view('admin/master',['categories'=>$categories,'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cat_name' => 'required|string|max:255',
            'cat_des' => 'nullable|string',
        ]);

        $category=new Category();
        $category->cat_name = $request->cat_name;
        $category->cat_des=$request->cat_des;
        $category->save();
        $categories = Category::all();

        return view('admin.master', ['categories' => $categories]);


    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $category = Category::findOrFail($id);
  return view('categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cat_name' => 'required|string|max:255',
            'cat_des' => 'nullable|string',
        ]);

        $category = Category::findOrFail($id);
        $category->cat_name = $validatedData['cat_name'];
        $category->cat_des = $validatedData['cat_des'];
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
