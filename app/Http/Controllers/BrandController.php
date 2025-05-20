<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $query=Brand::query();

        if($request->has('search') && $request->search != ''){
            $search=$request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        return $query->latest()->paginate(10);
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

        $validated=$request->validate([
            'name'=>'required|string|max:255',
            'brand_image'=>'nullable|image|max:2048',
        ]);

        if($request->hasFile('brand_image')){
            $path=$request->file('brand_image')->store('brands', 'public');
            $validated['brand_image']=$path;
        }

        $brand=Brand::create($validated);

        return response()->json($brand, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
        return $brand;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
        $validated=$request->validate([
            'name'=>'required|string|max:255',
            'brand_image'=>'nullable|image|max:2048'
        ]);

        if($request->has('remove_image') && $brand->brand_image){
            Storage::delete('public/'.$brand->brand_image);
            $brand->brand_image=null;
        }

        if($request->hasFile('brand_image')){
            if($brand->brand_image){
                Storage::delete('public/'.$brand->brand_image);
            }

            $path=$request->file('brand_image')->store('brands', 'public');
            $brand->brand_image=$path;
        }

        $brand->update([
            'name' => $validated['name'],
            'brand_image' => $brand->brand_image,
        ]);

        return response()->json($brand, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();
        return response()->noContent();
    }
}
