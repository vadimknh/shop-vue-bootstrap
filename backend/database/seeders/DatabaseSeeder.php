<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Color;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Categories, Tags, Colors
        Category::create([
            'title' => 'Футболки',
        ]);
        Category::create([
            'title' => 'Украшения',
        ]);


        Tag::create([
            'title' => 'Верх',
        ]);
        Tag::create([
            'title' => 'Низ',
        ]);
        Tag::create([
            'title' => 'Аксесуары',
        ]);
        Tag::create([
            'title' => 'Женское',
        ]);


        Color::create([
            'title' => '#FFFAF0',
            'description' => 'Белый',
        ]);
        Color::create([
            'title' => '#FFDAB9',
            'description' => 'Персиковый',
        ]);
        Color::create([
            'title' => '#000000',
            'description' => 'Черный',
        ]);
        Color::create([
            'title' => '#0000FF',
            'description' => 'Синий',
        ]);

        // Product 1
        Product::create([
            'title' => 'Футболка Поло',
            'description' => 'Футболка Поло',
            'content' => 'Футболка Поло',
            'preview_image' => 'images/product-01.jpg',
            'quantity' => 10,
            'price' => 500,
            'category_id' => 1,
        ]);

        ProductTag::create([
            'tag_id' => 1,
            'product_id' => 1,
        ]);
        ProductTag::create([
            'tag_id' => 4,
            'product_id' => 1,
        ]);

        ColorProduct::create([
            'color_id' => 1,
            'product_id' => 1,
        ]);
        ColorProduct::create([
            'color_id' => 2,
            'product_id' => 1,
        ]);

        // Product 2
        Product::create([
            'title' => 'Футболка Поло',
            'description' => 'Футболка Поло',
            'content' => 'Футболка Поло',
            'preview_image' => 'images/product-10.jpg',
            'quantity' => 10,
            'price' => 500,
            'category_id' => 1,
        ]);

        ProductTag::create([
            'tag_id' => 1,
            'product_id' => 2,
        ]);
        ProductTag::create([
            'tag_id' => 4,
            'product_id' => 2,
        ]);

        ColorProduct::create([
            'color_id' => 3,
            'product_id' => 2,
        ]);


    }
}
