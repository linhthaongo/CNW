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
        $departments = Department::all();               // getAll
        for ($i = 0; $i < 20; $i++) {
            DB::table('employees')->insert([
                'name'      =>  $faker->userName(),
                'address'    =>  $faker->state(),
                'birthday'    =>  $faker->date(),
                'start_work'    =>  $faker->date(),
                'department_id'   =>  $faker->randomElement($departments)->id
            ]);
        }
    }
}
