<?php

namespace Database\Seeders;

use App\Models\Airplane;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;          
use Faker\Factory as Faker;  

class PassengersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $airplanes = Airplane::all();   
        for ($i = 0; $i < 50; $i++) {
            DB::table('passengers')->insert([
                'EmailAddress'=>$faker->email(),
                'GivenNames'  => $faker->firstName(),
                'Surname'=>$faker->lastName()
            ]);
        } 
    }
}
