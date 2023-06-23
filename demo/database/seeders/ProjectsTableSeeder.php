<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;  
use App\Models\Department;
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $departments = Department::all();  
        for ($i = 0; $i < 20; $i++) {
            DB::table('projects')->insert([
                'Name'      => $faker->name(),
                'Location'  => $faker->state(),
                'department_id'   =>  $faker->randomElement($departments)->id
            ]);
        }
    }
}
