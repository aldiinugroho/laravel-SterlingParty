<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            'Item_Name' => 'Party popper',
            'Item_Price' => 15000,
            'Item_Amount' => 200,
            'Item_ImageType' => 'jpg',
            'Item_Image' => file_get_contents("public//Assets/main/pop.jpg")
        ]);

        DB::table('item')->insert([
            'Item_Name' => 'Terrarium glass',
            'Item_Price' => 340000,
            'Item_Amount' => 20,
            'Item_ImageType' => 'jpg',
            'Item_Image' => file_get_contents("public/Assets/main/glass.jpg")
        ]);
    }
}
