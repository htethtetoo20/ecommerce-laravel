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
            ["name"=>"Lenovo",
            "price"=>"100",
            "category"=>"Tablet",
            "description"=>"A smart headpone with 4GB ram and much more features",
            "gallery"=>"http://d1f7geppf3ca7.cloudfront.net/origin/730150/716lsydg3fl_ac_sl1500__1602802096741.jpg"

            ],
            ["name"=>"Iwatch",
                "price"=>"200",
                "category"=>"Watch",
                "description"=>"A smart watch with 4GB ram and much more features",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOITAUOv_jKzirowgT2RUyWWnZyn_csmuI3Ikp2H1yAcck3fc2VCLbJ38yZI-e57rS-ys&usqp=CAU"
            ]
        ]);

    }
}
