<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
			[
				'name' => 'Admin Admin',
				'email' => 'admin@admin.hu',
				'password' => '$2y$10$vaqFrOSkBQ.3HENayO.77uvkChQK5no0WJhCBIeluovTv8vEcDdmW', //12345678
				'role' => 1
			],
			[
				'name' => 'User User',
				'email' => 'user@user.hu',
				'password' => '$2y$10$vaqFrOSkBQ.3HENayO.77uvkChQK5no0WJhCBIeluovTv8vEcDdmW', //12345678
				'role' => 0
			],
        ]);
    }
}
