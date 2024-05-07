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
        $categories = Subcategory::all();
        return SubcategoryResource::collection($categories);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $category = Subcategory::create($data);

        return SubcategoryResource::make($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $category)
    {
        return SubcategoryResource::make($category);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Subcategory $category)
    {
        $data = $request->validated();
        $category->update($data);
        return SubcategoryResource::make($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $category)
    {
        $category->delete();
        return response()->json(['message' => 'done'], 204);
    }
}
