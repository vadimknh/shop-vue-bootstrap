<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Http\Requests\ColorStoreRequest;
use App\Http\Requests\ColorUpdateRequest;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();
        return view('admin.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ColorStoreRequest $request)
    {
        $data = $request->validated();
        Color::firstOrCreate($data);
        return redirect()->route('admin.color.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        return view('admin.color.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        return view('admin.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ColorUpdateRequest $request, Color $color)
    {
        $data = $request->validated();  
        $color->update($data);
        return redirect()->route('admin.color.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        $color->delete();
        return redirect()->route('admin.color.index');
    }
}
