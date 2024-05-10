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
        $drones = Drones::all();
        return DronesResource::collection($drones);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $drone = Drones::create($data);

        return DronesResource::make($drone);
    }

    /**
     * Display the specified resource.
     */
    public function show(Drones $drone)
    {
        return DronesResource::make($drone);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Drones $drone)
    {
        $data = $request->validated();
        $drone->update($data);
        return DronesResource::make($drone);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drones $drone)
    {
        $drone->delete();
        return response()->json(['message' => 'done'], 204);
    }
}
