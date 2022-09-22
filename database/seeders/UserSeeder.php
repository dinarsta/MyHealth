<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'fattan@gmail.com',
                'NIK' => '1234567890123456',
                'name' => 'Fattan',
                'password' => Hash::make('12345'),
                'no_telpon' => '12345',
                'foto' => 'test.jpg',
            ],
            [
                'email' => 'dina@gmail.com',
                'NIK' => '1234567890123457',
                'name' => 'Dina',
                'password' => Hash::make('12345'),
                'no_telpon' => '12345',
                'foto' => 'test.jpg',

            ],
        ]);
    }
}
