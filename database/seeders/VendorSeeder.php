<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // VendorFactoryクラスで定義した内容にもとづいてダミーデータを5つ生成し、vendorsテーブルに追加する
        Vendor::factory()->count(5)->create();
    }
}
