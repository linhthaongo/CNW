<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Journal;

class JournalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) { // Creating 50 posts just for example.
 	   Journal::create([
 		'title' => $faker->sentence(6, true), // Generates a random sentence with 6 words.
 		'editor' => $faker->sentence(6, true), // Generates 3random paragraphs.
        'ISSN' =>$faker->randomNumber(8,true),
        'date'=>$faker->date()

 ]);
 }
    }
}
