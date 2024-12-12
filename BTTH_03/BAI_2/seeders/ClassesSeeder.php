<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table("classes")->insert([
                "grade_level" => $faker->randomElement(['Pre-K', 'Kindergarten']), // Chọn ngẫu nhiên cấp lớp
               "room_number" => 'VH' . $faker->numberBetween(1, 10), // Tạo số phòng dạng VH1, VH2,...
           
            ]);}
    }
}