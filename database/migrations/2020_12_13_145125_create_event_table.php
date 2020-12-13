<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id('Event_ID');
            $table->foreignId('User_ID')
            ->references('User_ID')
            ->on('user');
            $table->foreignId('Theme_ID')
            ->references('Theme_ID')
            ->on('theme');
            $table->foreignId('PaymentType_ID')
            ->references('PaymentType_ID')
            ->on('paymenttype');
            $table->string('Event_Name');
            $table->integer('Event_Contact');
            $table->string('Event_Address');
            $table->string('Event_Date');
            $table->string('Event_Additional');
            $table->integer('Event_Guest');
            $table->integer('Event_Price');
            $table->string('Event_Term');
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
        Schema::dropIfExists('event');
    }
}
