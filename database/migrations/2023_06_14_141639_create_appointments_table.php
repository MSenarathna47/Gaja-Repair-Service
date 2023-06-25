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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('carModel')->nullable();
            $table->string('carYear')->nullable();
            $table->string('licensePlate')->nullable();
            $table->string('transmissiontype')->nullable();
            $table->string('fuelfype')->nullable();
            $table->string('serviceSelection')->nullable();
            $table->string('preferredDateTime')->nullable();
            $table->string('time')->nullable();
            $table->text('discription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
