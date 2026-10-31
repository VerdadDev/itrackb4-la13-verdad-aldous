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
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('comics', function (Blueprint $table) {
            $table->dropColumn('genre');      // your old text column
        });

        Schema::table('comics', function (Blueprint $table) {
            $table->foreignId('genre_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->dropForeign(['genre_id']);
            $table->dropColumn('genre_id');
        });

        Schema::table('comics', function (Blueprint $table) {
            $table->string('genre');
        });

        Schema::dropIfExists('genres');
    }
};
