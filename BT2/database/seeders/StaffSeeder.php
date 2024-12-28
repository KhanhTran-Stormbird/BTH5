<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;
use App\Models\Department; // Ensure you import the Department model

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = Department::all(); // Get all departments
        Staff::factory()->count(50)->create([
            'department_id' => function () use ($departments) {
                return $departments->random()->id; // Assign random department_id from the available departments
            },
        ]);
    }
}
