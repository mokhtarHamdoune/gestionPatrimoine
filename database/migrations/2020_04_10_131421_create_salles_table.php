<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_faculte");
            $table->string("nom");
            $table->integer("capacite");
            $table->string("type_salle"); // amphy , labo , class 
            // $table->unsignedBigInteger("id_departement");
            $table->timestamps();
            $table->foreign("id_faculte")->references("id")->on("facultes");
            // $table->foreign("id_departement")->references("id")->on("departements");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salles');
    }
}
