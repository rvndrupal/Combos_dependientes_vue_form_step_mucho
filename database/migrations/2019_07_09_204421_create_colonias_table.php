<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColoniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colonias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_col');

            $table->unsignedInteger('estados_id');
            $table->foreign('estados_id')->references('id')->on('estados');

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
        Schema::dropIfExists('colonias');
    }
}
