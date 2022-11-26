<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(PublisherSeeder::class);
        $this->call(BookSeeder::class);
        DB::table('book_categories')->insert([
            [
                'book_id' => 1,
                'category_id' => 1
            ],
            [
                'book_id' => 1,
                'category_id' => 2
            ],
            [
                'book_id' => 1,
                'category_id' => 3
            ],
            [
                'book_id' => 2,
                'category_id' => 1
            ],
            [
                'book_id' => 2,
                'category_id' => 5
            ],
            [
                'book_id' => 3,
                'category_id' => 5
            ],
            [
                'book_id' => 3,
                'category_id' => 4
            ],
            [
                'book_id' => 4,
                'category_id' => 6
            ],
            [
                'book_id' => 4,
                'category_id' => 9
            ],
            [
                'book_id' => 5,
                'category_id' => 8
            ],
            [
                'book_id' => 5,
                'category_id' => 7
            ],
            [
                'book_id' => 5,
                'category_id' => 6
            ],
        ]);
    }
}
