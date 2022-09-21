<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksis')->insert([
            [
                'no_transaksi' => 1,
                'table_id' => 2,
                'user_id' => 1,
                'menu_id' => 1,
                'pajak' => 2500,
                'diskon' =>7500,
                'total' => 20000,
            ],

            
        ]);
    }
}
