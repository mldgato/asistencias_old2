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
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->integer('policy');
            $table->string('insuredLastName');
            $table->string('insuredFirstName');
            $table->string('vehicleBrand');
            $table->string('vehicleLine');
            $table->string('vehicleType');
            $table->string('vehicleYear');
            $table->string('vehicleColor');
            $table->string('vehiclePlate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurances');
    }
};
