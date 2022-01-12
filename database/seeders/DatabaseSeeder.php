<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'username' => 'splenticz',
            'fullname' => 'Kelvin',
            'password' => Hash::make('kelvinchenchen'),
            'role' => '1'
        ]);
        User::create([
            'username' => 'adminKL',
            'fullname' => 'Kelvin',
            'password' => Hash::make('adminkelvin'),
            'role' => '2'
        ]);
    }
}
