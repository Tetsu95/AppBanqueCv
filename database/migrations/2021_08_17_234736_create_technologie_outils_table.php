<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnologieOutilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologie_outils', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
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
        Schema::table('technologie_outils', function (Blueprint $table){
            $table->dropForeign("cv_id");
            });
        Schema::dropIfExists('technologie_outils');
    }
}
