<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemtransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemtransaction', function (Blueprint $table) {
            $table->id('Itemtransaction_ID');
            $table->foreignId('User_ID')
            ->references('User_ID')
            ->on('user');
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
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
        Schema::dropIfExists('itemtransaction');
    }
}
