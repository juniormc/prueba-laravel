<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('excerpt');
                $table->text('detail');
                $table->string('image');
                $table->boolean('isActive');
                $table->integer('user_id');
                $table->boolean('isFeactured');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peliculas');
    }
}