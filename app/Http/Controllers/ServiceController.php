<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();
        return response()->json($service);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->image = $request->image;
        $service->state = $request->state;
        $service->type_of_service_id = $request->type_of_service_id;
        $service->save();
        return response()->json([
            'success' => true,
            'data' => $service
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::find($id);
        return response()->json($service, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->image = $request->image;
        $service->state = $request->state;
        $service->type_of_service_id = $request->type_of_service_id;
        $service->save();
        return response()->json([
            'success' => true,
            'data' => $service
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
