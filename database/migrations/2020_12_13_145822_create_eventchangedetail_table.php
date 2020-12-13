<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventchangedetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventchangedetail', function (Blueprint $table) {
            $table->foreignId('Eventchange_ID')
            ->references('Eventchange_ID')
            ->on('eventchange');
            $table->foreignId('Event_ID')
            ->references('Event_ID')
            ->on('event');
            $table->foreignId('Theme_ID')
            ->references('Theme_ID')
            ->on('theme');
            $table->string('Eventchangedetail_Name');
            $table->integer('Eventchangedetail_Contact');
            $table->string('Eventchangedetail_Address');
            $table->string('Eventchangedetail_Date');
            $table->string('Eventchangedetail_Additional');
            $table->string('Eventchangdetail_Term');
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
        Schema::dropIfExists('eventchangedetail');
    }
}
