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
        Schema::create('plant_herbs', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('scientific_name')->nullable();

            $table->string('image')->nullable();

            $table->longText('chemical_content')->nullable();
            $table->longText('benefits')->nullable();
            $table->longText('usage')->nullable();
            $table->longText('side_effects')->nullable();
            $table->longText('references')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plant_herbs');
    }
};
