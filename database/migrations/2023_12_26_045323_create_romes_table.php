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
        Schema::create('romes', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('title');
            $table->string('subtitle');
            $table->string('interior');
            $table->string('room_number');
            $table->string('adult');
            $table->string('childreen')->default(0);
            $table->string('price');
            $table->string('image');
            $table->string('slug');
            $table->longText('description');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('romes');
    }
};
