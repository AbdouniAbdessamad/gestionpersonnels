<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestionps', function (Blueprint $table) {
            $table->id();
            $table->string("region");
            $table->string("efp");
            $table->string("annexe");
            $table->string("corps");
            $table->string("nomprenom");
            $table->string("cin");
            $table->string("genre");
            $table->date("datenaissance");
            $table->integer("age");
            $table->string("tel");
            $table->string("email");
            $table->string("situationfamiliale");
            $table->string("fonction");
            $table->string("statut");
            $table->string("ppr");
            $table->string("mode");
            $table->string("niveau");
            $table->string("filiere");
            $table->string("modules")->nullable();
            $table->integer("nbheuresparsemaine")->nullable();
            $table->date("daterecrutement");
            $table->string("gradeentree");
            $table->string("gradeactuel");
            $table->string("dernierdiplome");
            $table->string("specialite");
            $table->text("observations")->nullable();
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
        Schema::dropIfExists('gestionps');
    }
};
