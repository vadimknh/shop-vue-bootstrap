<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorProduct extends Model
{
    use HasFactory;

    /**
     * Explicitly indicate which table this model is associated with.
     */
    protected $table = 'color_products';

    /**
     * Explicitly indicate which columns in the table cannot be changed.
     */
    protected $guarded = [];
}
