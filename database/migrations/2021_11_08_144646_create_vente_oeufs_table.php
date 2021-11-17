<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVenteOeufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vente_oeufs', function (Blueprint $table) {
            $table->increments('id');
            $table->double('quantite')->nullable();
            $table->foreignId('client_id')->nullable();
            $table->double('prix_unitaire')->nullable();
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
        Schema::drop('vente_oeufs');
    }
}
