<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statues')->insert([
            [
                'name' => 'Bouddha',
                'creation_date' => 2000,
                'origin_country' => 'Japon',
                'price' => 220,
                'creator' => 'Bouddha lui-même'
            ],
            [
                'name' => 'Charles DeGaulle',
                'creation_date' => 1800,
                'origin_country' => 'France',
                'price' => 500,
                'creator' => 'Charles lui-même'
            ],
            [
                'name' => 'Le petit chien de Chocapic',
                'creation_date' => 2009,
                'origin_country' => 'USA',
                'price' => 890,
                'creator' => 'Philip'
            ]
        ]);
    }
}
