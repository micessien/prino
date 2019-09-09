<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entite');
            $table->string('categorie');
            $table->string('adresse');
            $table->string('boite postale');
            $table->string('ville');
            $table->string('chiffredaffaire');
            $table->string('nombremploye');
            $table->string('descriptifentreprise');
            $table->string('prixremporte');
            $table->string('siteweb');
            $table->string('facebook');
            $table->string('twitter');
            $table->integer('userid');
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
        Schema::dropIfExists('project');
    }
}
