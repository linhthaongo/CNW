<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            DB::table('courses')->insert([
                'program_id'=>$faker->randomElement([1,2,3,4,5,6]),
                'Name' => $faker->sentence(),
                'CreditPoints'=>$faker->numberBetween(1, 100),
                'YearCommenced'=>$faker->year() 
            ]);
        }
    }
}
