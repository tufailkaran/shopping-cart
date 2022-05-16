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
        //
        DB::table('products')->insert([
            [
                'name' => 'Oppo Mobile',
                'price' => '60000',
                'category'=>'mobile',
                'description' => 'An Oppo company smart phones with best quality',
                'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno6-4g-oversea/listpage/Phone-List-Page-product-list-Aurora-427-x-600.png.thumb.webp',
            ],
            [
                'name' => 'HP Laptop',
                'price' => '130000',
                'category'=>'laptop',
                'description' => 'An HP company Laptop with best quality',
                'gallery'=>'https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c07961089.png',
            ],
            [
                'name' => 'Samsung Mobile',
                'price' => '70000',
                'category'=>'mobile',
                'description' => 'An Samsung company smart phones with best quality',
                'gallery'=>'https://images.samsung.com/is/image/samsung/assets/pk/S22_SmallTile_PC.png?$160_160_PNG$',
            ],
            [
                'name' => ' Ipad',
                'price' => '70000',
                'category'=>'tablet',
                'description' => 'An Apple company Tablet  with best quality',
                'gallery'=>'https://www.apple.com/v/ipad/home/bx/images/overview/compare_ipad_air__bxjv33pk6nte_large.png',
            ],
        ]);
    }
}
