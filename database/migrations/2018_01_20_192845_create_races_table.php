<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->increments('rowid');
            $table->char('DataVersion',255);
            $table->char('Race_Name',255);
            $table->date('Race_Date');
            $table->char('Start_Time',255);
            $table->char('Ties',255);
            $table->char('Start12',255);
            $table->char('Chief_Of_Competition',255);
            $table->char('Technical_Delegate',255);
            $table->char('Assistant_Technical_Delegate',255);
            $table->char('Jury',255);
            $table->char('Secretary',255);
            $table->char('Course_Name',255);
            $table->char('HD',255);
            $table->char('MC',255);
            $table->char('TC',255);
            $table->char('Laps',255);
            $table->char('Lap_Length',255);
            $table->char('Weather',255);
            $table->char('Header_Banner_Path',255);
            $table->char('Footer_Banner_Path',255);
            $table->char('Display_Banner_Path',255);
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
        Schema::dropIfExists('races');
    }
}
