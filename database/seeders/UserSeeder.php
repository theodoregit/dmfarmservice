<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'tewodros yesmaw',
            'email' => 'tedoteams@gmail.com',
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'abebe kebede',
            'email' => 'abebe@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
