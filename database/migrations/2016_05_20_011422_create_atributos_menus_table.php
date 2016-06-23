<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtributosMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributos_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo', 100);
            $table->string('posicion', 100);
            $table->string('estado', 100);
            $table->string('color', 50);

            $table->integer('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menu');

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
        Schema::drop('atributos_menu');
    }
}
