<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\ColorProduct;
use App\Models\ProductTag;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();
        return view('admin.product.create', compact('tags', 'colors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagsIds = $data['tags'];
        $colorIds = $data['colors'];
        unset($data['tags'], $data['colors']);

        $product = Product::firstOrCreate(
            [
                'title' => $data['title'],
            ],
            $data,
        );

        $product->tags()->attach($tagsIds);
        $product->colors()->attach($colorIds);

        // foreach ($tagsIds as $tagId) {
        //     ProductTag::firstOrCreate([
        //         'product_id' => $product->id,
        //         'tag_id' => $tagId,
        //     ]);
        // }

        // foreach ($colorIds as $colorId) {
        //     ColorProduct::firstOrCreate([
        //         'product_id' => $product->id,
        //         'color_id' => $colorId,
        //     ]);
        // }

        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'tags', 'colors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        if (isset($data['preview_image'])) {
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }

        $tagsIds = $data['tags'];
        $colorIds = $data['colors'];
        unset($data['tags'], $data['colors']);

        $product->update($data);

        $product->tags()->sync($tagsIds);
        $product->colors()->sync($colorIds);

        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->tags()->detach($product->tags);
        $product->colors()->detach($product->colors);

        $product->delete();

        return redirect()->route('admin.product.index');
    }
}
