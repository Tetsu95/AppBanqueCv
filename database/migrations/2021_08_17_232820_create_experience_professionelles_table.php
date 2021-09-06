<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceProfessionellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_professionelles', function (Blueprint $table) {
            $table->id();
            $table->string("poste");
            $table->string("employeur");
            $table->string("ville");
            $table->string("date_debut");
            $table->string("date_fin");
            $table->string("description")->nullable();
            $table->foreignId("cv_id")->constrained();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experience_professionnelles', function (Blueprint $table){
            $table->dropForeign("cv_id");
            });
        Schema::dropIfExists('experience_professionelles');
    }
}
