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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama')->nullable();
            $table->integer('kk')->nullable();
            $table->integer('nik')->nullable();
            $table->integer('nisn')->nullable();
            $table->enum('kelamin', ['L', 'P'])->default('L');
            $table->string('pob')->nullable();
            $table->date('dob')->nullable();
            $table->string('alamat')->nullable();
            $table->string('ayah')->nullable();
            $table->string('ibu')->nullable();
            $table->integer('hp_ayah')->nullable();
            $table->integer('hp_ibu')->nullable();
            $table->enum('status', ['fix', 'wait'])->default('wait');
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
};
