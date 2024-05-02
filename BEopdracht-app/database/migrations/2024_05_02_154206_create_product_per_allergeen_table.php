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
        Schema::create('product_per_allergeen', function (Blueprint $table) {
            $table->id();
            $table->integer('ProductId')->refernces('id')->on('product');
            $table->integer('AllergeenId')->refernces('id')->on('allergeen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_per_allergeen');
    }
};
