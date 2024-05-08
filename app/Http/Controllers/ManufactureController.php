<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Manufactory\StoreRequest;
use App\Http\Requests\Manufactory\UpdateRequest;
use App\Http\Resources\Manufactory\ManufactoryResource;

class ManufactureController extends Controller
{
    public function index()
    {
        $manufactures = Manufacture::all();
        return ManufactoryResource::collection($manufactures);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $manufacture = Manufacture::create($data);

        return ManufactoryResource::make($manufacture);
    }

    /**
     * Display the specified resource.
     */
    public function show(Manufacture $manufacture)
    {
        return ManufactoryResource::make($manufacture);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Manufacture $manufacture)
    {
        $data = $request->validated();
        $manufacture->update($data);
        return ManufactoryResource::make($manufacture);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manufacture $manufacture)
    {
        $manufacture->delete();
        return response()->json(['message' => 'done'], 204);
    }
}
