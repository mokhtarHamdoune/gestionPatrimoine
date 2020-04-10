<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger("id_salle");
            $table->foreign("id_salle")->references("id")->on("salle");
       
            $table->unsignedBigInteger("id_prof");
            $table->foreign("id_prof")->references("id")->on("profs");
     
            $table->unsignedBigInteger("id_module");
            $table->foreign("id_module")->references("id")->on("modules");
     
            $table->string("heure_debut");
            $table->string("heure_fin");
            $table->string("jour");  //  dimanche ou lundi ...
        
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
        Schema::dropIfExists('seances');
    }
}
