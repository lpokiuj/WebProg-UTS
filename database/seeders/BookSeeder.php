<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'publisher_id' => 1,
                'title' => 'title 1',
                'author' => 'author 1',
                'year' => 2002,
                'synopsis' => 'synopsis 1',
                'image' => 'image 1'
            ],
            [
                'publisher_id' => 2,
                'title' => 'title 2',
                'author' => 'author 2',
                'year' => 2002,
                'synopsis' => 'synopsis 2',
                'image' => 'image 2'
            ],
        ]);
    }
}
