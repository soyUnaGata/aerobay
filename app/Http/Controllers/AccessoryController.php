<?php

namespace App\Http\Controllers;

use App\Http\Requests\Accessory\StoreRequest;
use App\Http\Requests\Accessory\UpdateRequest;
use App\Http\Resources\Accessory\AccessoryResource;
use App\Models\Accessory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Tests\Integration\Http\Fixtures\PostResource;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessories = Accessory::all();
        return AccessoryResource::collection($accessories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $accessory = Accessory::create($data);

        return AccessoryResource::make($accessory);
    }

    /**
     * Display the specified resource.
     */
    public function show(Accessory $accessory)
    {
        return PostResource::make($accessory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Accessory $accessory)
    {
        $data = $request->validated();
        $accessory->update($data);
        return AccessoryResource::make($accessory);
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
