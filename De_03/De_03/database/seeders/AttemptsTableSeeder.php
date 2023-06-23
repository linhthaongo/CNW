<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AttemptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            DB::table('attempts')->insert([
                'Student_id'=>$faker->randomElement([1,2,3,4,5,6]),
                'Course_id'=>$faker->randomElement([1,2,3,4,5,6]),
                'Year' => $faker->year(),
                'Semester'=>$faker->numberBetween(1, 7),
                'Mark'=>$faker->numberBetween(1, 7),
                'Grade'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10)
            ]);
        }
    }
}
