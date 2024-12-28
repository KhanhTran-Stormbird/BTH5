<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            DepartmentSeeder::class, // Ensure departments are seeded first
            StaffSeeder::class,      // Then seed staff
            UserSeeder::class,
        ]);
    }
}
