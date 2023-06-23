<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;          
use Faker\Factory as Faker;  
class AirplanesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i < 50; $i++) {
            DB::table('airplanes')->insert([
                'RegistrationNumber'=>$faker->numberBetween(1000, 9999),
                'ModelNumber'  => $faker->regexify('[A-Z]{2}-\d{4}'),
                'Capacity'=>$faker->numberBetween(50,200)
            ]);
        } 
    }
}
