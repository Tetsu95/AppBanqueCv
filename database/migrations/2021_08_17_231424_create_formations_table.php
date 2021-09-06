<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string("formation");
            $table->string("etablissement");
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
        Schema::table('formations', function (Blueprint $table){
            $table->dropForeign("cv_id");
            });
        Schema::dropIfExists('formations');
    }
}
