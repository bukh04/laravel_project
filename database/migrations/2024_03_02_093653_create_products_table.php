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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Price')->nullable();
            $table -> string('image')->nullable();
            $table -> string('title');
            $table-> text('description')->nullable();
            $table->text('comments')->nullable();
            $table->unsignedBigInteger('amount_of_buys')->nullable();
            $table->boolean('availability')->default(1);
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('category_id')->nullable();

            $table->index('category_id', 'product_category_idx');

            $table->foreign('category_id', 'product_category_fk')->on('categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
