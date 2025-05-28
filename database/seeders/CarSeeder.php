<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                'en' => 'Kaiyi X7',
                'ar' => 'كايي اكس 7',
                'image'=>'assets/img/kia/models/Kaiyi-X7.png',
                'view' => 'KaiyiX-7'
            ],
            [
                'en' => 'Kaiyi E5',
                'ar' => 'كايي اي 5',
                'image'=>'assets/img/kia/models/Kaiyi-E5.png',
                'view' => 'KaiyiE-5'
            ],
            [
                'en' => 'kaiyi X3 pro',
                'ar' => 'كايي اكس 3 برو',
                'image'=>'assets/img/kia/models/Kaiyi-X3-Pro.png',
                'view' => 'KaiyiX-3Pro'
            ],
        ];

        foreach ($cars as $car) {
            DB::table('cars')->insert([
                'name' => json_encode([
                    'en' => $car['en'],
                    'ar' => $car['ar']
                ]),
                'slug' => Str::slug($car['en']),
                'img' => json_encode([$car['image']]), 
                'details' => json_encode([
                    'en' => $car['details'] ?? '',
                    'ar' => $car['details'] ?? ''
                ]),
                'view' => $car['view'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
