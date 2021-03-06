<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);
        $this->call(themeSeeder::class);
        $this->call(paymenttypeSeeder::class);
        $this->call(itemSeeder::class);
    }
}
