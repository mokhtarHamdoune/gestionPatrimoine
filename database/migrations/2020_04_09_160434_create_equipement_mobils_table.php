<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipementMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipement_mobils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("marque");
            $table->string("modele");
            $table->integer("quantite");
            $table->timestamps();
            $table->unique(["marque","modele"]);//je pense haka
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipement_mobils');
    }
}
