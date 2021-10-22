<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFileAlimentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_alimentations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produit_id')->nullable();
            $table->double('quantite')->nullable();
            $table->double('prix_unitaire')->nullable();
            $table->text('observations')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
            $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('file_alimentations');
    }
}
