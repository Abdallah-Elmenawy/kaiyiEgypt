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
                'en' => 'Kaiyi X-7',
                'ar' => 'كايي X-7',
                'image'=>'assets/img/kia/models/Kaiyi-X7.png',
                'view' => 'KaiyiX-7'
            ],
            [
                'en' => 'Kaiyi E-5',
                'ar' => 'كايي E-5',
                'image'=>'assets/img/kia/models/Kaiyi-E5.png',
                'view' => 'KaiyiE-5'
            ],
            [
                'en' => 'Kaiyi X-3',
                'ar' => 'كايي X-3',
                'image'=>'assets/img/kia/models/Kaiyi-X3-Pro.png',
                'view' => 'KaiyiX-3Pro'
            ],
            // [
            //     'en' => 'Kaiyi X3 Pro2',
            //     'ar' => 'كايي X-3 2برو',
            //     'image'=>'assets/img/kia/models/Kaiyi-X3-Pro2.png'
            // ],
            
        ];

        foreach ($cars as $car) {
            DB::table('cars')->insert([
                'name' => json_encode([
                    'en' => $car['en'],
                    'ar' => $car['ar']
                ]),
                'slug' => Str::slug($car['en']),
                'img' => json_encode([$car['image']]), // داخل مصفوفة ليدعم أكثر من صورة
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
