<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(['message' => "Display all products"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return response()->json(['message' => "Product created successfully."]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response()->json(['message' => "Display product with ID: $id"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return response()->json(['message' => "Product with ID: $id updated successfully. "]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return response()->json(['message' => " Product with ID: $id deleted successfully."]);
    }
    
    public function uploadImageLocal(Request $request)
    {
        //
        return response()->json(['message' => "Image successfully stored in local disk driver."]);
    }

    public function  uploadImagePublic(Request $request)
    {
        //
        return response()->json(['message' => ":Image successfully stored in public disk driver."]);
    }

}
