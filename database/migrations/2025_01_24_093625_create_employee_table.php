<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->integer('worker_registration_number')->autoIncrement();
            $table->string('name', 100);
            $table->string('surname', 100);
            $table->date('date_of_birth', 100);
            $table->string('role', 100);
            $table->integer('phone')->nullable();
            $table->string('email', 100);
            $table->foreignId('company_id')->constrained();
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
        Schema::dropIfExists('employee');
    }
};
