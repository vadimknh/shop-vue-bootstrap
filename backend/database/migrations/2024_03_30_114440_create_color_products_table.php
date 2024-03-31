<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('color_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('color_id')->nullable()->index()->constrained('colors');
            $table->foreignId('product_id')->nullable()->index()->constrained('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color_products');
    }
};
