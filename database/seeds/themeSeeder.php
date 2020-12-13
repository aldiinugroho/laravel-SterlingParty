<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class themeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theme')->insert([
            'Theme_Name' => 'Casual',
            'Theme_Description' => 'pesta meriah sekali'
        ]);

        DB::table('theme')->insert([
            'Theme_Name' => 'Halloween',
            'Theme_Description' => 'menyeramkan sekali'
        ]);

        DB::table('theme')->insert([
            'Theme_Name' => 'Pool',
            'Theme_Description' => 'pesta meriah sekali'
        ]);

        DB::table('theme')->insert([
            'Theme_Name' => 'Rock',
            'Theme_Description' => 'meriahkan pesta dengan rock'
        ]);
    }
}
