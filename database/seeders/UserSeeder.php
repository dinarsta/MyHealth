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
                'name' => 'Fattan',
                'password' => Hash::make('12345'),
                'no_telpon' => '12345',
                'alamat' => 'depock',
                'role' => 'admin',
            ],
            [
                'email' => 'dina@gmail.com',
                'name' => 'Dina',
                'password' => Hash::make('12345'),
                'no_telpon' => '12345',
                'alamat' => 'depock',
                'role' => 'kasir',
            ],
        ]);
    }
}
