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
            $table->unsignedBigInteger("enseignant_id");
            $table->unsignedBigInteger("equipement_id");
            $table->string("date");
            $table->string("heure");
            $table->timestamps();
            $table->foreign("enseignant_id")->references("id")->on("enseignants");
            $table->foreign("equipement_id")->references("id")->on("equipement_mobils");
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
