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
        Schema::table('plant_herbs', function (Blueprint $table) {
            $table->enum('is_herb', ['yes', 'no'])
                ->default('no')
                ->after('slug');

            $table->string('product_type')
                ->nullable()
                ->after('is_herb');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('variations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_herb')
                ->constrained('plant_herbs')
                ->cascadeOnDelete();

            $table->string('unit');
            $table->decimal('price', 12, 2);
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }
};
