<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'ノート5冊セット',
            'price' => 600,
            'created_at' => '2023-06-01 00:00:00',
            'updated_at' => '2023-06-01 00:00:00',
            'vendor_code' => 1111
        ]);
    }
}
