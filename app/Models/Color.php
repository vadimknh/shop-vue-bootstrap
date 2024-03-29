<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Explicitly indicate which table this model is associated with.
     */
    protected $table = 'colors';

    /**
     * Explicitly indicate which columns in the table cannot be changed.
     */
    protected $guarded = [];
}
