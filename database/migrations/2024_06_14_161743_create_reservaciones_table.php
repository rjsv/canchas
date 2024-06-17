<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('court_id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('location');
            $table->boolean('available');
            $table->date('date');
            $table->string('status');
            $table->timestamps();

            // Definir la clave foránea
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Opcional: si la tabla 'courts' existe y se tiene un court_id como clave foránea
        // $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
