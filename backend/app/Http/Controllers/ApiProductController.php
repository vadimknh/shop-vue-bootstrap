<?php

namespace App\Http\Controllers;

use App\Models\ApiProduct;
use App\Http\Resources\ApiProductResource;
use App\Http\Requests\ApiProductStoreRequest;
use App\Http\Requests\ApiProductUpdateRequest;
use App\Models\Product;

class ApiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apiProducts = Product::all();
        return response(['data' => ApiProductResource::collection($apiProducts)], 200);
    }
//
//    /**
//     * Show the form for creating a new resource.
//     */
//    public function store(ApiProductStoreRequest $request)
//    {
//        $data = $request->validated();
//        $apiproduct = ApiProduct::firstOrCreate($data);
//        return response(['data' => new ApiProductResource($apiproduct)], 201);
//    }
//
//    /**
//     * Display the specified resource.
//     */
//    public function show(ApiProduct $apiproduct)
//    {
//        return response(['data' => new ApiProductResource($apiproduct)], 200);
//    }
//
//    /**
//     * Update the specified resource in storage.
//     */
//    public function update(ApiProductUpdateRequest $request, ApiProduct $apiproduct)
//    {
//        $data = $request->validated();
//        $apiproduct->update($data);
//        return response(['data' => new ApiProductResource($apiproduct)], 200);
//    }
//
//    /**
//     * Delete the specified resource from storage.
//     */
//    public function destroy(ApiProduct $apiproduct)
//    {
//        $apiproduct->delete();
//        return response(['data' => null], 204);
//    }
}
