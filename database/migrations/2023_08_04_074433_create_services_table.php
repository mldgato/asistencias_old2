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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->date('date');
            $table->date('assignmentTime');
            $table->string('serviceType')->enum(['Asixpress', 'Vehículo asegurado', 'Tercero', 'Otro']);
            $table->string('contactTime')->nullable();
            $table->string('endingTime')->nullable();
            $table->string('address');
            $table->string('endingTime')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
