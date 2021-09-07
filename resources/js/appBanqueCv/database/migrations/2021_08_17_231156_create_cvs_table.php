<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string("nom_cv");
            $table->string ("nom");
            $table->string ("prenoms");
            $table->date ("date_naissance")->nullable();
            $table->string ("lieu_naissance")->nullable();
            $table->string ("type_profil");
            $table->string ("email")->unique();
            $table->string("telephone1")->unique();
            $table->string("telephone2")->nullable();
            $table->string("adresse");
            $table->string("photo");
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
        Schema::dropIfExists('cvs');
    }
}
