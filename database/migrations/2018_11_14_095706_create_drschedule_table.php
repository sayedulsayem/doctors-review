<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrscheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drschedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('chamber');
            $table->date('available_schedule_d');
            $table->time('available_schedule_t');
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
        Schema::dropIfExists('drschedules');
    }
}
