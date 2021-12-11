<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titre')->nullable();
            $table->string('cover')->nullable();
            $table->integer('category_id')->nullable();
            $table->float('prix')->nullable();
            $table->float('quantite')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('films');
    }
}
