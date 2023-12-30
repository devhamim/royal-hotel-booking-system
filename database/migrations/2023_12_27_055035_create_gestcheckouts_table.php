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
        Schema::create('gestcheckouts', function (Blueprint $table) {
            $table->id();
            $table->integer('gest_id');
            $table->integer('room_id');
            $table->string('checkindate');
            $table->string('checkoutdate');
            $table->string('fast_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('zip')->nullable();
            $table->string('number');
            $table->string('paypal')->nullable();
            $table->string('stripe')->nullable();
            $table->string('debit')->nullable();
            $table->string('note')->nullable();
            $table->string('paypal_mail')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('card_holder')->nullable();
            $table->string('card_number')->nullable();
            $table->string('expire_month')->nullable();
            $table->string('expire_year')->nullable();
            $table->string('cvc')->nullable();
            $table->string('st_card_holder')->nullable();
            $table->string('st_card_number')->nullable();
            $table->string('st_expire_month')->nullable();
            $table->string('st_expire_year')->nullable();
            $table->string('st_cvc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestcheckouts');
    }
};
