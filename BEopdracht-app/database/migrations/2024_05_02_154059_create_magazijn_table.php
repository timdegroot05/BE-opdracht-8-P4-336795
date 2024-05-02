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
        Schema::create('magazijn', function (Blueprint $table) {
            $table->id();
            $table->integer('ProductId')->refernces('id')->on('product');
            $table->string('VerpakkingsEenheid');
            $table->integer('AantalAanwezig');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magazijn');
    }
};
