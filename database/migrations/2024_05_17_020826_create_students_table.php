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
        Schema::create('students', function (Blueprint $table) {
            $table->id()->;
            $table->varchar('student_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('dob');
            $table->string('email');
            $table->varchar('password');
            $table->varchar('gender');
            $table->varchar('nrc');
            $table->varchar('phone_no');
            $table->string('address');
            $table->string('photo');
            $table->varchar('choosed_region');
            $table->varchar('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
