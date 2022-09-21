<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tables')->insert([
            [
                'no_table' => '1',
            ],
            [
                'no_table' => '2',
            ],
            [
                'no_table' => '3',
            ],
            [
                'no_table' => '4',
            ],
        ]);
    }
}
