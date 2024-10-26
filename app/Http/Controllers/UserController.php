<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->password = Hash::make($request->password);
        $user->state = $request->state;
        $user->email = $request->email;
        $user->user_type_id = $request->user_type_id;
        $user->save();
        return response()->json([
            'success' => true,
            'data' => $user
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json($user, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->password = Hash::make($request->password);
        $user->state = $request->state;
        $user->email = $request->email;
        $user->user_type_id = $request->user_type_id;
        $user->save();
        return response()->json([
            'success' => true,
            'data' => $user
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
