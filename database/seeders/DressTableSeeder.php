<?php

namespace Database\Seeders;

use App\Models\Dress;
use Illuminate\Database\Seeder;

class DressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dress::create([
            'merk'	=> "T-shirt Uniqlo",
            'color'	=> "black",
            'size'	=> "M | L | XL | XXL",
            'description' => "T-sheert Uniqlo untuk remaja"

        ]);

        Dress::create([
            'merk'	=> "T-shirt Galgil",
            'color'	=> "white",
            'size'	=> "M | L | XL | XXL",
            'description' => "T-sheert Uniqlo untuk remaja"

        ]);
    }
}
