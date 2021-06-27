<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->nullable();
            $table->string('registrationDate')->nullable();
            $table->string('rollNo')->nullable();
            $table->string('class')->nullable();
            $table->string('gender')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('parentsName')->nullable();
            $table->string('parentsMobileNumber')->nullable();
            $table->string('dateOfBirth')->nullable();
            $table->string('bloodGroup')->nullable();
            $table->string('address')->nullable();
            $table->string('upload')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
