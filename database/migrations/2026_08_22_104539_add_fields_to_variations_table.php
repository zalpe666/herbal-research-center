<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('variations', function (Blueprint $table) {
            $table->foreignId('id_herb')
                ->after('id')
                ->constrained('plant_herbs')
                ->cascadeOnDelete();

            $table->string('unit')
                ->after('id_herb');

            $table->decimal('price', 12, 2)
                ->after('unit');

            $table->string('image')
                ->nullable()
                ->after('price');
        });
    }

    public function down(): void
    {
        Schema::table('variations', function (Blueprint $table) {
            $table->dropForeign(['id_herb']);

            $table->dropColumn([
                'id_herb',
                'unit',
                'price',
                'image',
            ]);
        });
    }
};