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
            'password' => bcrypt('password')
        ]);

        Company::factory(10)->create();

        Employee::factory(30)->create();
    }
}
