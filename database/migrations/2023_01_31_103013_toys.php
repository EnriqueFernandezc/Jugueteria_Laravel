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
        // crear tabla toys
        Schema::create('toys', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->id();
            $table->string('title', 250);
            $table->text('description');
            $table->string('img', 250)->default(''); //si el campo img esta vacio se agrega comillas
            $table->integer('age')->nullable();            
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
        //eliminar tabla toys si existe
        Schema::dropIfExists('toys');
    }
};
