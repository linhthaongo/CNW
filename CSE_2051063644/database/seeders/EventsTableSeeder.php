<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('events')->insert([
                'title'      => $faker->sentence(),
                'description'  => $faker->sentence(),
                'date'=>$faker->date(),
                'location'=>$faker->state()
            ]);
        }
    }
}
