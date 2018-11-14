<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrtagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drtags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('specialities')->nullable();
            $table->string('chamber')->nullable();
            $table->date('available_schedule_d')->nullable();
            $table->time('available_schedule_t')->nullable();
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
        Schema::dropIfExists('drtags');
    }
}
