<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class paymenttypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paymenttype')->insert([
            'PaymentType_Name' => 'Debit'
        ]);
    }
}
