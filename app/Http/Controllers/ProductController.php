<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Property;

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


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'MainCity' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = Product::findOrFail($id);

        $item->MainCity = $request->MainCity;
        $item->slug = $request->slug;
        $item->address = $request->address;
        $item->price = $request->price;
        $item->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $item->image = $imageName;
        }

        $item->save();

        return redirect()->back()->with('success', 'Item update successfully.');
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
        $properties = Product::where('MainCity', 'LIKE', "%{$query}%")->get();
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
public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('admin.product.edit', compact('product'));
}

}
