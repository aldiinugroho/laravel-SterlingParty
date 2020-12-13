<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id('Item_ID');
            $table->string('Item_Name');
            $table->integer('Item_Price');
            $table->integer('Item_Amount');
            $table->string('Item_ImageType');
            $table->timestamps();
        });
        
        DB::statement("ALTER TABLE item ADD Item_Image MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
