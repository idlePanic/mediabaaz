<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('bio');
            $table->string('image')->default('default.jpg');
            $table->timestamps();
        });
        Schema::create('cast_movie' , function (Blueprint $table){
            $table->increments('id');
            $table->integer('cast_id')->unsigned();
            $table->integer('movie_id')->unsigned();

            $table->foreign('cast_id')
                ->references('id')
                ->on('casts')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('movie_id')
                ->references('id')
                ->on('movies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cast_movie');
        Schema::dropIfExists('casts');
    }
}
