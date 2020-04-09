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
            $table->unsignedBigInteger("salle_id");
            $table->string("marque");
            $table->string("modele");
            $table->timestamps();
            $table->foreign("salle_id")->references("id")->on("salles");
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
