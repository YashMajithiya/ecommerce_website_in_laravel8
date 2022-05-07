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
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
            ],
            [
                'name'=>'Soni Tv',
                "price"=>"500",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name'=>'LG fridge',
                "price"=>"200",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
            ],
             [
                'name'=>'oppo',
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
