<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cal_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('calendar_id');
            $table->datetime('datetime_start');
            $table->datetime('datetime_end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cal_events');
    }
}
