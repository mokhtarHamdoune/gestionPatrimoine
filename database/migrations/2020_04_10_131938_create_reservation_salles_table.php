<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_salles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titre")->nullable();
            $table->unsignedBigInteger("id_prof");
            $table->foreign("id_prof")->references("id")->on("profs");
            $table->unsignedBigInteger("id_salle");
            $table->foreign("id_salle")->references("id")->on("salles");
            $table->unsignedBigInteger("promo_id");
            $table->foreign("promo_id")->references("id")->on("promos");
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
        Schema::dropIfExists('reservation_salles');
    }
}
