<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreInteretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_interets', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
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
        Schema::table('centre_interets', function (Blueprint $table){
            $table->dropForeign("cv_id");
            });
        Schema::dropIfExists('centre_interets');
    }
}
