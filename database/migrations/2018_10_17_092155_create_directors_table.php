<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('bio')->nullable();
            $table->string('image')->default('default.jpg');
            $table->timestamps();
        });
//        Schema::create('director_movie',function (Blueprint $table){
//            $table->increments('id');
//            $table->integer('director_id')->unsigned();
//            $table->integer('movie_id')->unsigned();
//
//            $table->foreign('director_id')
//                ->references('id')
//                ->on('directors')
//                ->onUpdate('cascade')
//                ->onDelete('cascade');
//
//            $table->foreign('movie_id')
//                ->references('id')
//                ->on('movies')
//                ->onUpdate('cascade')
//                ->onDelete('cascade');

//                $table->primary(['id']);

//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('director_movie');
        Schema::dropIfExists('directors');
    }
}
