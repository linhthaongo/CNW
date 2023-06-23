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
        Schema::create('attempts', function (Blueprint $table) {
            $table->unsignedBigInteger('Student_id');
            $table->unsignedBigInteger('Course_id');
            $table->year('Year');
            $table->integer('Semester');
            $table->integer('Mark');
            $table->float('Grade');
            $table->foreign('Student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('Course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attempts');
    }
};
