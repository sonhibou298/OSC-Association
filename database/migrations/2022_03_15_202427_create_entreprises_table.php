<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nomEse')->unique();
            $table->string('siege');
            $table->integer('telephone')->unique();
            $table->date('dateCreation');
            $table->string('registre')->unique();
            $table->string('ninea')->unique();
            $table->boolean('dispositifFormation');
            $table->boolean('organigramme');
            $table->boolean('contrat');
            $table->foreignId('quartier_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('entreprises');
    }
}
