<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatatanPerjalananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catatan_perjalanans')->insert([
            [
                'user_id' => 1,
                'tanggal' => Carbon::now()->format('Y-m-d'),
                'lokasi' => 'Depock',
                'waktu' => Carbon::now()->format('H:i:s'),
                'suhu_tubuh' => 400,
            ]
        ]);
    }
}
