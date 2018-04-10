<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'jack',
            'email' => 'jackstraatman@gmail.com',
            'password' => Hash::make('Admin123'),
        ]);
    }
}
