<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Explicitly indicate which table this model is associated with.
     */
    protected $table = 'products';

    /**
     * Explicitly indicate which columns in the table cannot be changed.
     */
    protected $guarded = [];

    /**
     * Explicitly indicate which columns in the table cannot be changed.
     */
    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->preview_image);
    }

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function colors() {
        return $this->belongsToMany(Color::class, 'color_products');
    }

    public function images() {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
