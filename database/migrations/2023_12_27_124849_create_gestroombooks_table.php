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
        Schema::create('gestroombooks', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('rooms');
            $table->string('gest');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestroombooks');
    }
};
