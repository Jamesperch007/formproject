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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob')->nullable();
            $table->string('gender');
            $table->string('marital_status');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('address');
            $table->string('applied_country')->nullable();
            $table->json('academic_details')->nullable(); //array
            $table->string('work_experience')->nullable();
            $table->string('test_taken');
            $table->string('score');
            $table->string('how_you_know')->nullable();
            $table->string('reference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
