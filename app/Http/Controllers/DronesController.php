<?php

namespace App\Http\Controllers;

use App\Http\Requests\Drones\StoreRequest;
use App\Http\Requests\Drones\UpdateRequest;
use App\Http\Resources\Drones\DronesResource;
use App\Models\Drones;

class DronesController extends Controller
{
    public function index()
    {
        $categories = Drones::all();
        return DronesResource::collection($categories);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $category = Drones::create($data);

        return DronesResource::make($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(Drones $category)
    {
        return DronesResource::make($category);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Drones $category)
    {
        $data = $request->validated();
        $category->update($data);
        return DronesResource::make($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drones $category)
    {
        $category->delete();
        return response()->json(['message' => 'done'], 204);
    }
}
