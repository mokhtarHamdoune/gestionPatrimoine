<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipementFixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipement_fixes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nom");
            $table->string("reference");
            $table->unsignedBigInteger("id_salle");
            $table->foreign("id_salle")->references("id")->on("salle");
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
        Schema::dropIfExists('equipement_fixes');
    }
}
