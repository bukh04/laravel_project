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
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('Price')->nullable()->change();
            $table-> text('description')->nullable()->change();
            $table->text('comments')->nullable()->change();
            $table->unsignedBigInteger('amount_of_buys')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('Price')->change();
            $table->text('description')->change();
            $table->text('comments')->change();
            $table->integer('amount_of_buys')->change();


        });
    }
};
