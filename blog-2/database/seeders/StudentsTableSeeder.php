<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Program;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('students')->insert([
                'program_id'      => $faker->randomElement([1,2,3,4,5,6]),
                'GivenNames'  => $faker->firstName(),
                'Surname'=>$faker->lastName(),
                'Date_of_birth'=>$faker->date(),
                'YearEnrolled'=>$faker->year()
            ]);
        }
    }
}
