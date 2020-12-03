<?php

namespace Database\Seeders;

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
            [
            'name' => "LG Mobile",
            'price' => "10000",
            'description' => "Smartphone with 4gb ram and much more",
            'category' => "Mobile",
            'gallery' => "https://i.ytimg.com/vi/aGNKwo8IhSE/maxresdefault.jpg"
            ],
            
            [
            'name' => "Oppo Mobile",
            'price' => "10000",
            'description' => "Smartphone with 4gb ram and much more",
            'category' => "Mobile",
            'gallery' => "https://cdn.vox-cdn.com/thumbor/hPYA53-ZWz_YCkEgyYZjmoHQ-0M=/0x0:2040x1360/920x613/filters:focal(857x517:1183x843):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/62827559/DSCF6490.0.jpg"
            ],
            
            [
            'name' => "Samsung TV",
            'price' => "5000",
            'description' => "SmartTV much more",
            'category' => "TV",
            'gallery' => "https://images.samsung.com/is/image/samsung/in-fhdtv-t5350-ua43t5350akxxl-ua--t----akxxl-271244673?$720_576_PNG$"
            ],
            
            [
            'name' => "LG TV",
            'price' => "5000",
            'description' => "SmartTV and much more",
            'category' => "TV",
            'gallery' => "https://www.lg.com/us/images/tvs/lm9500/lg_tv_lm9500_gallery01.jpg"
            ]
        ]);
    }
}
