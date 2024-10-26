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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('position');
            $table->date('start_day');
            $table->date('birthday');
            $table->boolean('gender');
            $table->string('nationality');
            $table->string('country_birth');
            $table->string('city');
            $table->boolean('marital_status');
            $table->string('address');
            $table->string('mother_tongue');
            $table->string('mobile_1');
            $table->string('mobile_2');
            $table->string('email')->nullable();
            $table->string('latest_position')->nullable();
            $table->string('latest_company')->nullable();
            $table->date('latest_job_start_at')->nullable();
            $table->date('latest_job_end_at')->nullable();
            $table->boolean('government_job_status');
            $table->tinyInteger('government_job')->nullable();
            $table->string('training_course')->nullable();
            $table->boolean('applied_before');
            $table->boolean('travel_status');
            $table->boolean('driving_status');
            $table->boolean('driving_license_status');
            $table->string('expected_salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
