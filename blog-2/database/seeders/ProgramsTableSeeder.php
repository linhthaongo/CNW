<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('programs')->insert([
                'Name'      => $faker->sentence(),
                'CreditPoints'  => $faker->numberBetween(1,10),
                'YearCommenced'=>$faker->year()
            ]);
        }

    }
}
