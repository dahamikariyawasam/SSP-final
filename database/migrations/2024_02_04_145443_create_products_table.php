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
            $table->timestamps();
            //name
            $table->string('MainCity');
            
            //slug
            $table->string('slug');
            //description
            $table->text('address');
            //description
            $table->text('description');

            //price
            $table->decimal('price');
            //status tinyint
            //image
            $table->string('image');
            
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