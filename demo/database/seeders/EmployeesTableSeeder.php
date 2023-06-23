<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use Faker\Factory as Faker;
use App\Models\Department;
class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $departments = Department::all();  
        for ($i = 0; $i < 20; $i++) {
            DB::table('employees')->insert([
                'Name'      => $faker->name(),
                'Gender'    => $faker->randomElement(['Male', 'Female','Other']),
                'Address'   => $faker->state(),
                'Dob'   => $faker->date(),
                'Doj'=> $faker->date(),
                'department_id'   =>  $faker->randomElement($departments)->id
            ]);
        }
    }
}
