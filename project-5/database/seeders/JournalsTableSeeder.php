<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Journals;

class JournalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<50;$i++){
            Journals::create([
                'jid'=>$i+1,
                'title'=>$faker->sentence(5,true),
                'editor'=>$faker->sentence(1,true),
                'issn'=>$faker->numberBetween(1,5),
            ]);
        }   
    }
}
