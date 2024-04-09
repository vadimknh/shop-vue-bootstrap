<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    /**
     * Explicitly indicate which table this model is associated with.
     */
    protected $table = 'product_images';

    /**
     * Explicitly indicate which columns in the table cannot be changed.
     */
    protected $guarded = [];

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->file_path);
    }
}
