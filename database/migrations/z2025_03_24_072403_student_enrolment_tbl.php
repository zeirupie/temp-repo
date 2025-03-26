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
        Schema::create('student_enrolment_tbl', function(Blueprint $table)
        {
            $table->id();
            
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students_tbl');

            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs_tbl');

            $table->unsignedBigInteger('major_id')->nullable();
            $table->foreign('major_id')->references('id')->on('majors_tbl');

            $table->unsignedBigInteger('year_level_id');
            $table->foreign('year_level_id')->references('id')->on('year_level_tbl');

            $table->unsignedBigInteger('semester_id');
            $table->foreign('semester_id')->references('id')->on('semester_tbl');

            $table->unsignedBigInteger('school_year_id');
            $table->foreign('school_year_id')->references('id')->on('school_year_tbl');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
