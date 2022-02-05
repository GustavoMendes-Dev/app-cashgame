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
        'name' => 'Danilo',
        'email' => 'mindspoker@gmail.com',
        'password' => Hash::make('D@nilo123'),
      ]);
      DB::table('users')->insert([
        'name' => 'Gustavo Mendes',
        'email' => 'g.mendes93@hotmail.com',
        'password' => Hash::make('Gut1993'),
      ]);
    }
}
