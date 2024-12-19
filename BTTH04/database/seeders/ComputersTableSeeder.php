<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table("computers")->insert([
                "computer_name" => $faker->unique()->regexify('(Lab|Office|Desk|Work|Comp)[1-9]-(PC|LT|SYS)[0-9]{2}'), 
                "model" => $faker->randomElement(['Dell Optiplex 7090', 'HP EliteDesk 800', 'Lenovo ThinkCentre M720', 'Apple Mac Mini']),
                "operating_system" => $faker->randomElement(['Windows 10 Pro', 'Windows 11 Pro', 'Ubuntu 20.04', 'MacOS Ventura']),
                "processor" => $faker->randomElement(['Intel Core i5-11400', 'AMD Ryzen 5 5600X', 'Intel Core i7-12700', 'Apple M1']),
                "memory" => $faker->randomElement([4, 8, 16, 32]), 
                "available" => $faker->boolean(), 
            ]);
            }
    }
}
