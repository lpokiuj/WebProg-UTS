<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            [
                'name' => 'publisher 1',
                'address' => 'address 1',
                'phone' => 'phone1',
                'email' => 'email1@gmail.com',
                'image' => 'image 1'
            ],
            [
                'name' => 'publisher 2',
                'address' => 'address 2',
                'phone' => 'phone 2',
                'email' => 'email2@gmail.com',
                'image' => 'image 2'
            ],
        ]);
    }
}
