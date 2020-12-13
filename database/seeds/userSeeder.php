<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'User_Name' => 'Aldi Nugroho',
            'User_Email' => 'aldiinug@gmail.com',
            'User_Password' => 'asdasd',
            'User_Term' => 'on'
        ]);

        DB::table('user')->insert([
            'User_Name' => 'Alvin',
            'User_Email' => 'vs@gmail.com',
            'User_Password' => 'asdasd',
            'User_Term' => 'on'
        ]);
    }
}
