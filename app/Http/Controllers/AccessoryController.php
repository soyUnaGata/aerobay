<?php

namespace App\Http\Controllers;

use App\Http\Requests\Accessory\StoreRequest;
use App\Http\Requests\Accessory\UpdateRequest;
use App\Http\Resources\Accessory\AccessoryResource;
use App\Models\Accessory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json("OKAY", 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $accessory = Accessory::create($data);
        AccessoryResource::make($accessory);

        $subcategories = $data['subcategories'];
        $accessory->subcategories()->attach($subcategories);

        return $accessory;
    }

    /**
     * Display the specified resource.
     */
    public function show(Accessory $accessory)
    {
        return AccessoryResource::make($accessory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Accessory $accessory)
    {
        $data = $request->validated();
        $accessory->update($data);

        $subcategories = $data['subcategories'];
        $accessory->subcategories()->detach();
        $accessory->subcategories()->attach($subcategories);

        return $accessory;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accessory $accessory)
    {
        $accessory->delete();
        return response()->json(null, 204);
    }
}
