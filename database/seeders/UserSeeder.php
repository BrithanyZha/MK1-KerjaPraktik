<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'Debby',
            'email' => 'debby@co.com',
            'password' => bcrypt('22222222'),
            'role' => 'admin'
        ]);
    }
}
