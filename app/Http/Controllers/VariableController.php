<?php

namespace App\Http\Controllers;

use App\Models\Variable;
use Hash;
use Illuminate\Http\Request;

class VariableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $variables = Variable::all();
        return response()->json($variables);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $variable = new Variable();
        $variable->name = $request->name;
        $variable->value = $request->value;
        $variable->state = $request->state;
        $variable->save();
        return response()->json([
            'success' => true,
            'data' => $variable
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $variable = Variable::find($id);
        return response()->json($variable, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $variable = Variable::find($id);
        $variable->name = $request->name;
        $variable->value = $request->value;
        $variable->state = $request->state;
        $variable->save();
        return response()->json([
            'success' => true,
            'data' => $variable
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Variable::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
