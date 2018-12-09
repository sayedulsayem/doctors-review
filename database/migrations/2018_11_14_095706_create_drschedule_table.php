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
            $table->date('starting_date');
            $table->date('ending_date')->nullable();
            $table->time('staring_time');
            $table->time('ending_time');
            $table->integer('total_appointment');
            $table->integer('house_no');
            $table->string('road');
            $table->string('dist');
            $table->string('sub_dist');
            $table->double('zip_code');
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
