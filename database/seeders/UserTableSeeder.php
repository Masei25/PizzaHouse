<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Lupitha',
            'lastname' => 'Smith',
            'email' => 'lupitha@gmail.com',
            'password' => '12345',
            'access_level' => 1
        ]);
    }
}
