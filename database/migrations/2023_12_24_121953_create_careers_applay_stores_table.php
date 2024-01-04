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
        Schema::create('careers_applay_stores', function (Blueprint $table) {
            $table->id();
            $table->integer('career_id');
            $table->string('resume');
            $table->string('fast_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('gender');
            $table->string('email');
            $table->string('country_code');
            $table->string('number');
            $table->string('country_name');
            $table->string('address_one');
            $table->string('address_two')->nullable();
            $table->string('city')->nullable();
            $table->string('post_code')->nullable();
            $table->string('street')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->string('desired_salary')->nullable();
            $table->string('job_title')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('edu_level')->nullable();
            $table->string('edu_institution')->nullable();
            $table->date('gradu_year')->nullable();
            $table->string('cover_later')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers_applay_stores');
    }
};
