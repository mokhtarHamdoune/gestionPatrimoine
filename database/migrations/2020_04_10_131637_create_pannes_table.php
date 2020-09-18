<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePannesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pannes', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string("type_equipement")->nullable();  //fixe ou mobile
            $table->unsignedBigInteger("id_prof");
            $table->foreign("id_prof")->references("id")->on("profs");
            $table->unsignedBigInteger("id_equipement");
            $table->foreign('id_equipement')->references('id')->on('equipement_fixes');
            $table->string("commentaire")->nullable();
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
        Schema::dropIfExists('pannes');
    }
}
