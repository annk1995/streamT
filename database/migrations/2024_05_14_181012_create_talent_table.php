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
        Schema::create('talent', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');


            $table->string('dob');
            $table->string('address');
            $table->string('phone');
            $table->string('profile_picture'); // Field for profile picture
            $table->string('identification_card'); // Field for identification card
            $table->string('face_picture');
            $table->foreignId('ethnicity_id')->constrained();
            $table->foreignId('gender_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('body_id')->constrained();
            $table->foreignId('age_id')->constrained();




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talent');
    }
};
