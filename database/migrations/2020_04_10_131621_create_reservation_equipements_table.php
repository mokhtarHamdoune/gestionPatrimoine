<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationEquipementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_equipements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titre")->nullable();
            $table->unsignedBigInteger("id_prof");
            $table->foreign("id_prof")->references("id")->on("profs");
            $table->unsignedBigInteger("id_equipement");
            $table->foreign("id_equipement")->references("id")->on("equipement_mobiles");
            $table->string("date");
            $table->string("heure_debut");
            $table->string("heure_fin");  
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
        Schema::dropIfExists('reservation_equipements');
    }
}
