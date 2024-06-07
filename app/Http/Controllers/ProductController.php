<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('Properties', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Save product details to database
        $product = new Product();
        $product->MainCity = $request->input('MainCity');
        $product->slug = Str::slug($request->input('slug'));
        $product->address = $request->input('address');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        // Save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image->move('uploads/product/', $filename);
            $product->image = $filename;
        } else {
            $product->image = 'noimage.jpg';
        }

        $product->save();
        return redirect()->back()->with('success', 'Product created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $products = Product::all();
        return view('admin.product.show', compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->MainCity = $request->input('MainCity');
        $product->slug = Str::slug($request->input('slug'));
        $product->address = $request->input('address');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        // Update image if a new one is uploaded
        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->image != 'noimage.jpg') {
                Storage::delete('uploads/product/' . $product->image);
            }

            // Save new image
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image->move('uploads/product/', $filename);
            $product->image = $filename;
        }

        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image != 'noimage.jpg') {
            Storage::delete('uploads/product/' . $product->image);
        }
        
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::all();
        $properties = Property::where('MainCity', 'LIKE', "%{$query}%")->get();
        return view('properties', compact('properties', 'products'));
    }


    
    public function searchproduct(Request $request)
{
    $search = $request->search;
    $products = Product::all();

    $products = Product::where('MainCity', 'like', '%' . $search . '%')->paginate(9);
    return view('Properties', compact('products'));
}

public function productAjax(Request $request)
{
$res = Product::select("MainCity")
->where("MainCity","LIKE","%{$request->term}%")
->get();
return response()->json($res);


}

}
