<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('books')->insert([
            [
                'publisher_id' => 1,
                'title' => 'Title 1',
                'author' => 'Author 1',
                'year' => 2002,
                'synopsis' => $faker->text(),
                'image' => $faker->imageUrl()
            ],
            [
                'publisher_id' => 2,
                'title' => 'Title 2',
                'author' => 'Author 2',
                'year' => 2008,
                'synopsis' => $faker->text(),
                'image' => $faker->imageUrl()
            ],
            [
                'publisher_id' => 3,
                'title' => 'Title 3',
                'author' => 'Author 3',
                'year' => 2016,
                'synopsis' => $faker->text(),
                'image' => $faker->imageUrl()
            ],
            [
                'publisher_id' => 4,
                'title' => 'Title 4',
                'author' => 'Author 4',
                'year' => 2022,
                'synopsis' => $faker->text(),
                'image' => $faker->imageUrl()
            ],
            [
                'publisher_id' => 1,
                'title' => 'Title 5',
                'author' => 'Author 5',
                'year' => 2003,
                'synopsis' => $faker->text(),
                'image' => $faker->imageUrl()
            ],
        ]);
    }
}
