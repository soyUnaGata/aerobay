<?php

namespace App\Http\Controllers;

use App\Models\Manufactory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Manufactory\StoreRequest;
use App\Http\Requests\Manufactory\UpdateRequest;
use App\Http\Resources\Manufactory\ManufactoryResource;

class ManufactoryController extends Controller
{
    public function index()
    {
        $categories = Manufactory::all();
        return ManufactoryResource::collection($categories);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $category = Manufactory::create($data);

        return ManufactoryResource::make($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(Manufactory $category)
    {
        return ManufactoryResource::make($category);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Manufactory $category)
    {
        $data = $request->validated();
        $category->update($data);
        return ManufactoryResource::make($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manufactory $category)
    {
        $category->delete();
        return response()->json(['message' => 'done'], 204);
    }
}
