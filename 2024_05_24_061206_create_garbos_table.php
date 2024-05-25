<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 100);
            $table->string('middlename', 100)->nullable();
            $table->string('lastname', 100);
            $table->string('email', 150)->unique();
            $table->string('phone', 15)->nullable();
            $table->date('birthdate');
            $table->enum('sex', ['MALE', 'FEMALE']);
            $table->string('address', 255);
            $table->unsignedTinyInteger('year');
            $table->string('course', 100);
            $table->string('section', 50);
            $table->decimal('gpa', 4, 2)->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
