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

            $table->string("id_salle")->nullable();
         
            $table->string("id_prof")->nullable();
         
            $table->string("id_module")->nullable();
         

            $table->unsignedBigInteger("id_promo");
            $table->foreign("id_promo")->references("id")->on("promos");
     

            $table->string("type")->nullable(); 
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
