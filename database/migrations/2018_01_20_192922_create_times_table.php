<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->increments('rowid');
            $table->char('Race',40);
            $table->integer('Row');
            $table->integer('Racer_Number');
            $table->char('TXCode1',40);
            $table->char('TX1_Time',23);
            $table->char('TXCode2',40);
            $table->char('TX2_Time',23);
            $table->char('Start_Time',23);
            $table->char('Stop_Time',23);
            $table->char('Total_Time',23);
            $table->char('reviewed',1);
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
        Schema::dropIfExists('times');
    }
}
