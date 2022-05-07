<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class fresharrivedseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('freshlyarrived')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"30000",
                "description"=>"A smartphone with 6gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/navigation/f15/F15-navigation-white-v2.png.thumb.webp"
            ],
            [
                'name'=>'One-plus',
                "price"=>"40000",
                "description"=>"A smart tv with voice remote much more feature",
                "category"=>"tv",
                "gallery"=>"https://m.media-amazon.com/images/I/71vZypjNkPS._SL1500_.jpg"
            ],
            [
                'name'=>'Apple headphones',
                "price"=>"50000",
                "description"=>"Best Head Phones With Many Features",
                "category"=>"mobile accesories",
                "gallery"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name'=>'Air Conditioners',
                "price"=>"2000",
                "description"=>"An A.C with much more feature",
                "category"=>"Air Conditioner",
                "gallery"=>"https://klivago.com/media/image/product/5012/md/lg-air-conditioner-r32-wall-unit-dual-cool-ap09rt-25-kw-i-9000-btu~3.jpg"
             ]

        ]);
    }
}



