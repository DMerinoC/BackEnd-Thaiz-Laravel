<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointment = Appointment::all();
        return response()->json($appointment);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();
        $appointment->date = $request->date;
        $appointment->state = $request->state;
        $appointment->user_id = $request->user_id;
        $appointment->service_id = $request->service_id;
        $appointment->save();
        return response()->json([
            'success' => true,
            'data' => $appointment
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointment = Appointment::find($id);
        return response()->json([
            'success' => true,
            'data' => $appointment
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appointment = Appointment::find($id);
        $appointment->date = $request->date;
        $appointment->state = $request->state;
        $appointment->user_id = $request->user_id;
        $appointment->service_id = $request->service_id;
        $appointment->save();
        return response()->json([
            'success' => true,
            'data' => $appointment
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Appointment::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
