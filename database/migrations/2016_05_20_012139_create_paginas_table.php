<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagina', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 200);
            $table->string('url', 200);
            $table->text('descripcion');
            $table->integer('orden_menu');
            $table->integer('orden_submenu');

            $table->integer('layout_id')->unsigned();
            $table->foreign('layout_id')->references('id')->on('layout');
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
        Schema::drop('pagina');
    }
}
