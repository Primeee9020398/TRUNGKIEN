<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $medicinesId = DB::table('medicines')->pluck('medicines_id')->toArray();
        for ($i = 0; $i < 100; $i++) {
            DB::table("sales")->insert([

                "medicines_id" => $faker->randomElement($medicinesId),
                'quantity' => $faker->numberBetween(1,100),
                "sale_date" => $faker->dateTime(),
                "customer_phone" => $faker->phoneNumber,
                

            ]);
    }
}
}