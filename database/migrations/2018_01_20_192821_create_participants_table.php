<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('rowid');
            $table->char('Class',255);
            $table->integer('Racer_Number');
            $table->char('First_Name',255);
            $table->char('Last_Name',255);
            $table->char('Gender',255);
            $table->date('Birth_Date');
            $table->char('Country',255);
            $table->char('Representing',255);
            $table->integer('Qualifying_Place');
            $table->char('Qualifying_Time',23);
            $table->char('USSA_License',10);
            $table->char('USSA_Points',10);
            $table->char('FIS_License',10);
            $table->char('FIS_Points',10);
            $table->char('TXCode1',40);
            $table->char('TXCode2',40);
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
        Schema::dropIfExists('participants');
    }
}
