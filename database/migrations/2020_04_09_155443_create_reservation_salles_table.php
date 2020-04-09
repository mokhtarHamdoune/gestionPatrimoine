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
            $table->unsignedBigInteger("salle_id");
            $table->unsignedBigInteger("module_id");
            $table->string("date");
            $table->string("heure");
            $table->timestamps();
            $table->foreign("salle_id")->references("id")->on("salles");
            $table->foreign("module_id")->references("id")->on("modules");
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
