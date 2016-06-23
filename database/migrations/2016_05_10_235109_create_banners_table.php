<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 150)->nullable();
            $table->text('descripcion')->nullable();
            $table->string('imagen',150);
            $table->string('url',150)->nullable();
            $table->integer('ancho');
            $table->integer('altura');
            $table->string('formato',50);

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
        //
        Schema::drop('banner');
    }
}
