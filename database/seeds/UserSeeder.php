<?php

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
                'name' => 'sato',
                'email' => 'sato@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2022/01/01 00:00:00',
            ],
            [
                'name' => 'tanaka',
                'email' => 'tanaka@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2022/01/02 00:00:00',
            ],
            [
                'name' => 'ito',
                'email' => 'ito@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2022/01/03 00:00:00',
            ],
            [
                'name' => 'honda',
                'email' => 'honda@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2022/01/04 00:00:00',
            ],
            [
                'name' => 'matsuda',
                'email' => 'matsuda@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2022/01/05 00:00:00',
            ],
        ]);
    }
}