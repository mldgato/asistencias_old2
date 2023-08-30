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
            $table->unsignedBigInteger('insurance_id');

            $table->string('Operator');
            $table->date('assignmentDate');
            $table->string('assignmentTime');
            $table->string('serviceType')->enum(['Asixpress', 'Vehículo asegurado', 'Tercero', 'Otro']);
            
            $table->unsignedBigInteger('supplier_id');
            $table->string('expert');
            $table->string('contactTime')->nullable();
            $table->string('endingTime')->nullable();


            $table->string('beneficiary');
            $table->string('address');
            $table->string('serviceWork')->enum(['Paso de corriente', 'Abasto de combustible', 'Cambio de llanta', 'Apertura de vehículo']);

            $table->string('pre_existingDamage')->enum(['Puerta derecha', 'Puerta izquierda', 'Neumático']);

            $table->string('maneuveringCost');
            $table->string('TotalCost');

            $table->longText('notes');


            $table->foreign('insurance_id')->references('id')->on('insurances')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
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
