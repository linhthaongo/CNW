<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Event;
use App\Models\Attendee;
class RegistrationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $events = Event::all();       // getAll
        $attendees = Attendee::all();
        for ($i = 0; $i < 50; $i++) {
            //$attendee = DB::table
            DB::table('attendees')->insert([
                'attendee_id'   => $faker->randomElement($attendees)->id,
                'event_id'   => $faker->randomElement($events)->id
            ]);
        }
    }
}
