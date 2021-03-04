<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'name' => 'Musa Dabra',
            'email' => 'musadabra' . '@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
