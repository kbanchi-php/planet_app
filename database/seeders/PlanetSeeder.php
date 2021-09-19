<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'name_ja' => '水星',
                'name_en' => 'MERCURY',
                'radius_km' => 2439,
                'weight' => 3310,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name_ja' => '金星',
                'name_en' => 'VENUS',
                'radius_km' => 6052,
                'weight' => 48700,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name_ja' => '地球',
                'name_en' => 'EARTH',
                'radius_km' => 6378,
                'weight' => 59760,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name_ja' => '火星',
                'name_en' => 'MARS',
                'radius_km' => 3397,
                'weight' => 6420,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name_ja' => '木星',
                'name_en' => 'JUPITER',
                'radius_km' => 71492,
                'weight' => 18993500,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name_ja' => '土星',
                'name_en' => 'SATURN',
                'radius_km' => 60268,
                'weight' => 5685980,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name_ja' => '天王星',
                'name_en' => 'URANUS',
                'radius_km' => 25559,
                'weight' => 868910,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name_ja' => '海王星',
                'name_en' => 'NEPTUNE',
                'radius_km' => 24764,
                'weight' => 1029660,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('planets')->insert($param);
    }
}
