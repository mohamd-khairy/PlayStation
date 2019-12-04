<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_name_ar')->default('فردي');
            $table->string('type_name_en')->default('individual');
            $table->string('key')->default('individual');
            $table->double('price');
            $table->unsignedInteger('device_type_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('device_type_id')->references('id')->on('device_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_types');
    }
}
