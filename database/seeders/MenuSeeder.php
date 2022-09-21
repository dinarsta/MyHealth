<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'code_menu' => '1',
                'nama_item' => 'sushi',
                'picture' => 'sushi.jpg',
                'category_id' => 1,
                'price' => '25000',
            ],

            
        ]);
    }
}
