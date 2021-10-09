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
        DB::table("products")->insert([
            ["name"=>"Dell",
            "price"=>"$500",
            "category"=>"Laptop",
            "description"=>"A smart laptop with 4GB ram and much more features",
            "gallery"=>"https://m.media-amazon.com/images/I/61zVpR0Q4jL._SL1280_.jpg"

            ],
            [
                "name"=>"Pannasonic",
                "price"=>"$200",
                "category"=>"TV",
                "description"=>"* 110 to 240 Volts & 50/60hz for Worldwide Use * Screen Size : 32 inches * Resolution: 1366x768 * Full HD * Connectivity: 2 HDMI, 2 USB & PC INPUT *",
                "gallery"=>"https://www.220-electronics.com/media/catalog/product/cache/06e563bb4bf8bb99ff5c3485d61b5ba4/d/3/d3xx_spec.png"
            ],
            [
                "name"=>"Iphone 13",
                "price"=>"$300",
                "category"=>"Mobile",
                "description"=>"A smart phone with 4GB ram and much more features",
                "gallery"=>"https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-family-select-2021?wid=940&hei=1112&fmt=jpeg&qlt=80&.v=1629842667000"
            ]
        ]);

    }
}
