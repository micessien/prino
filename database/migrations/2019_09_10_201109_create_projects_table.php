<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->usingned()->nullable();
            $table->string('entite');
            $table->string('categorie');
            $table->string('adresse');
            $table->string('boite_postale');
            $table->string('ville');
            $table->string('chiffredaffaire');
            $table->string('nombremploye');
            $table->string('descriptifentreprise');
            $table->string('prixremporte');
            $table->string('siteweb');
            $table->string('facebook');
            $table->string('twitter');


            $table->string('nomcomplet');
            $table->string('telephone');
            $table->string('fonctionoccupe');
            $table->string('descriptifprojet');
            $table->string('innovantprojet');
            $table->string('concurrent');
            $table->string('equipe');


            $table->string('reglementation');
            $table->string('stadedevelopement');
            $table->string('besoinfinancement');
            $table->string('repartitioncapitale');
            $table->string('reglement');
            $table->string('declarationfiscale');
            $table->string('businessplan');
            $table->string('planfinancier');
            $table->string('presentationpowerpoint');

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
        Schema::dropIfExists('projects');
    }
}
