<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Explicitly indicate which table this model is associated with.
     */
    protected $table = 'tags';

    /**
     * Explicitly indicate which columns in the table cannot be changed.
     */
    protected $guarded = [];
}
