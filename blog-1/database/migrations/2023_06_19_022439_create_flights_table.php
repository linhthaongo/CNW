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
        Schema::create('flights', function (Blueprint $table) {
            $table->integer('FlightNumber');
            $table->integer('RegistrationNumber');
            $table->string('From');
            $table->string('To');
            $table->date('DepartureDate');
            $table->time('DepartureTime');
            $table->date('ArrivalDate');
            $table->primary('FlightNumber');
            $table->foreign('RegistrationNumber')->references('RegistrationNumber')->on('airplanes')->onDelete('cascade');
           
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
