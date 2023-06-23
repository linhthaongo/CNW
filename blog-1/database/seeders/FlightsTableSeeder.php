<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;          
use Faker\Factory as Faker;  
use App\Models\Airplane;
class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $airplanes = Airplane::all();   
        for ($i = 0; $i < 50; $i++) {
            DB::table('flights')->insert([
                'FlightNumber'=>$faker->numberBetween(200,990),
               // 'RegistrationNumber'  => $faker->randomNumber(1,10),
                'RegistrationNumber' => $airplanes[0]->RegistrationNumber,
                'From'=>$faker->city(),
                'To'=>$faker->city(),
                'DepartureDate'=>$faker->date(),
                'DepartureTime'=>$faker->time(),
                'ArrivalDate'=>$faker->date()
            ]);
        } 
    }
}
