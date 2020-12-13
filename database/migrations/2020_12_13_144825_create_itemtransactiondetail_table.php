<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemtransactiondetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemtransactiondetail', function (Blueprint $table) {
            $table->foreignId('Itemtransaction_ID')
            ->references('Itemtransaction_ID')
            ->on('itemtransaction');
            $table->foreignId('Item_ID')
            ->references('Item_ID')
            ->on('item');
            $table->integer('Itemtransactiondetail_Amount');
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
        Schema::dropIfExists('itemtransactiondetail');
    }
}
