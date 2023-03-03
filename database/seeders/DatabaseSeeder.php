<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(19)->create();
        User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => '$2y$10$l0.ra6oY.BnqmKGARQqXO.5SrFww6QpwfUxpqYU.XYXwUT01VIRcK'
        ]);

        Company::factory(10)->create();

        Employee::factory(30)->create();
    }
}
