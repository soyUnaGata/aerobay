<?php

namespace App\Http\Controllers;

use App\Http\Requests\Drone\StoreRequest;
use App\Http\Requests\Drone\UpdateRequest;
use App\Http\Resources\Drone\DroneResource;
use App\Models\Drone;

class DroneController extends Controller
{
    public function index()
    {
        $drones = Drone::all();
        return DroneResource::collection($drones);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $drone = Drone::create($data);

        return DroneResource::make($drone);
    }

    /**
     * Display the specified resource.
     */
    public function show(Drone $drone)
    {
        return DroneResource::make($drone);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Drone $drone)
    {
        $data = $request->validated();
        $drone->update($data);
        return DroneResource::make($drone);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drone $drone)
    {
        $drone->delete();
        return response()->json(['message' => 'done'], 204);
    }
}
