<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use Faker\Factory as Faker;
class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('departments')->insert([
                'name'      => $faker->name(),
                'location'  => $faker->state()
            ]);
        }
    }
}
