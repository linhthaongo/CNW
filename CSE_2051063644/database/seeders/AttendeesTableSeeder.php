<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Event;
class AttendeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $events = Event::all();               // getAll
        for ($i = 0; $i < 50; $i++) {
            DB::table('attendees')->insert([
                'name'      =>  $faker->name(),
                'email'    =>  $faker->email(),
            ]);
        }
    }
}
