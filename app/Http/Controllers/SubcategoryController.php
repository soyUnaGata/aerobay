<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Subcategory\StoreRequest;
use App\Http\Requests\Subcategory\UpdateRequest;
use App\Http\Resources\Subcategory\SubcategoryResource;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::with('category')->get();

        return response()->json($subcategories);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $subcategory = Subcategory::create($data);
        return SubcategoryResource::make($subcategory);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        return SubcategoryResource::make($subcategory);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Subcategory $subcategory)
    {
        $data = $request->validated();
        $subcategory->update($data);
        return SubcategoryResource::make($subcategory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return response()->json(['message' => 'done'], 204);
    }
}
