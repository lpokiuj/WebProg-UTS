<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('publishers')->insert([
            [
                'name' => 'Publisher 1',
                'address' => 'Address 1',
                'phone' => '088593621',
                'email' => 'email1@gmail.com',
                'image' => $faker->imageUrl()
            ],
            [
                'name' => 'Publisher 2',
                'address' => 'Address 2',
                'phone' => '073748812',
                'email' => 'email2@gmail.com',
                'image' => $faker->imageUrl()
            ],
            [
                'name' => 'Publisher 3',
                'address' => 'Address 3',
                'phone' => '099847143',
                'email' => 'email3@gmail.com',
                'image' => $faker->imageUrl()
            ],
            [
                'name' => 'Publisher 4',
                'address' => 'Address 4',
                'phone' => '0889567849',
                'email' => 'email4@gmail.com',
                'image' => $faker->imageUrl()
            ],
        ]);
    }
}
