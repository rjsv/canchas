<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dni')->nullable();
            $table->string('category')->nullable();
            $table->date('birthdate')->nullable();
            $table->tinyInteger('sex')->default(0);
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->tinyInteger('level')->default(0);
            $table->tinyInteger('dominant_hand')->default(0);
            $table->boolean('is_active')->default(true); // Añadir este campo
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
