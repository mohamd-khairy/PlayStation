<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('device_id');
            $table->unsignedInteger('user_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date')->default(null)->nullable();
            $table->text('market')->default(null)->nullable();
            $table->double('market_price')->default(null)->nullable();
            $table->double('device_price')->default(null)->nullable();
            $table->double('total_price')->default(null)->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('sessions');
    }
}
