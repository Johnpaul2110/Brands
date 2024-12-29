<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index(Request $request)
    {
        $query = Brand::query();
    
        if ($request->has('search')) {
            $query->where('brand_name', 'like', '%' . $request->search . '%');
        }
    
        $brands = $query->paginate(10);
    
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255', 
        ]);
    
        Brand::create([
            'brand_name' => $request->brand_name, 
        ]);
    
        return redirect()->route('brands.index')->with('success', 'Brand created successfully!');
    }





    
    public function edit(Brand $id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.edit', compact('brand'));
    }





    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
            'brand_name' => 'required|string|unique:brands,brand_name,' . $brand->id, // Correct column name and primary key reference
        ]);
    
        // Update the brand with the validated data

        $brand->update([
            'brand_name' => $validated['brand_name'],
        ]);
    
        return redirect()->route('brands.index')->with('success', 'Brand updated successfully!');
    }





//dD
    public function destroy(Brand $brand) 
    {
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Category deleted successfully.');
    }
    public function show($id)
{
    $brand = Brand::findOrFail($id);
    return view('brands.edit', compact('brand'));
}


}
