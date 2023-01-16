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
        Schema::create('coaches', function (Blueprint $table) {

            $table->id();
            $table->string('User_Name' , 20);
            $table->string('Email' , 20);
            $table->boolean('check')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');

            // $table->foreignId('id')->constrained('players')->cascadeOnDelete();
            // $table->foreignId('id')->constrained('users')->cascadeOnUpdate();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coaches');
    }
};
