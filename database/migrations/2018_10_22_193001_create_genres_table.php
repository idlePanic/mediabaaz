<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('genre_movie', function (Blueprint $table){
            $table->integer('genre_id')->unsigned();
            $table->integer('movie_id')->unsigned();

            $table->foreign('genre_id')
                ->references('id')
                ->on('genres')
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
        Schema::dropIfExists('genre_movie');
        Schema::dropIfExists('genres');
    }
}
