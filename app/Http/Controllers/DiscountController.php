<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discount = Discount::all();
        return response()->json($discount);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $discount = new Discount();
        $discount->discount = $request->discount;
        $discount->description = $request->description;
        $discount->state = $request->state;
        $discount->service_id = $request->service_id;
        $discount->save();
        return response()->json([
            'success' => true,
            'data' => $discount
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $discount = Discount::find($id);
        return response()->json($discount, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $discount = Discount::find($id);
        $discount->discount = $request->discount;
        $discount->description = $request->description;
        $discount->state = $request->state;
        $discount->service_id = $request->service_id;
        $discount->save();
        return response()->json([
            'success' => true,
            'data' => $discount
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Discount::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
