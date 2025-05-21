<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $query = Product::with(['brand', 'category', 'unit']);

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                ->orWhere('sku', 'like', "%{$search}%")
                ->orWhereHas('brand', function ($q2) use ($search) {
                    $q2->where('name', 'like', "%{$search}%");
                })
                ->orWhereHas('category', function ($q3) use ($search) {
                    $q3->where('name', 'like', "%{$search}%");
                });
            });
        }

        return $query->latest()->paginate(10);

        // return Product::with(['brand', 'category', 'unit'])->latest()->paginate(10);
    }

    public function newArrivalsHome(){
        return Product::with(['brand', 'category', 'unit'])->latest()->paginate(4);
    }
    public function popularHome(){
        return Product::with(['brand', 'category', 'unit'])->inRandomOrder()->paginate(4);
    }
    public function dealsHome(){
        return Product::with(['brand', 'category', 'unit'])
                 ->where('discount', '>', 0)
                 ->orderBy('discount', 'desc')
                 ->paginate(4);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price' => 'required|integer|min:0',
            'sku' => 'required|string|unique:products,sku',
            'unit_id' => 'required|exists:units,id',
            'discount' => 'nullable|integer|min:0|max:100',
            'quantity' => 'required|integer|min:0'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = $path;
        }

        $product=Product::create($validated);

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return response()->json(
            $product->load(['category', 'brand', 'unit'])
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $validated = $request->validate([
            'image' => 'nullable|image|max:2048', //User may not upload new image
            'name' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price' => 'required|integer|min:0',
            'sku' => 'required|string|unique:products,sku,' . $product->id, // sku should be unique, but excluding the current product’s ID.
            'unit_id' => 'required|exists:units,id',
            'discount' => 'nullable|integer|min:0|max:100',
            'quantity' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }

            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = $path;
        }

        // Update product
        $product->update($validated);

        // Return the updated product
        return response()->json($product, 200);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return response()->noContent();
    }
}
