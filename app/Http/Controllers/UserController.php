<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

use function Termwind\render;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            "success" => true,
            "users" => [
                ["name" => 'KD', 'work' => 'SE'],
                ["name" => 'Nyx', 'work' => 'SQA']
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->first();

        if (!$user){
            return response()->json([
                "success" => false, 
                "message" => 'User not found'
            ]);
        }

        return response()->json([
                "success" => true, 
                "user" => $user
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "success" => true, 
            "message" => 'User updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $user = User::where('id', $id)->first();

        // if (!$user){
        //     return response()->json([
        //         "success" => false, 
        //         "message" => 'User not found'
        //     ]);
        // }

        // User::where('id', $id)->first()->delete();

        return response()->json([
            "success" => true,
            "message" => 'User deleted successful'
        ]);
        
    }


    public function patch(string $id){
        return response()->json([
            "success" => true,
            "message" => 'You sent a patch request!'
        ]);
    }
}
