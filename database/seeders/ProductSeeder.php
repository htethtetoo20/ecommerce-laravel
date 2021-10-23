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
                "gallery"=>"https://www.climaxcomputer.com/wp-content/uploads/2019/09/apple-series-5-40mm.jpg"
            ],
            ["name"=>"Samsung",
            "price"=>"300",
            "category"=>"Refrigerator",
            "description"=>"A smart refrigerator with 4GB ram and much more features",
            "gallery"=>"https://electromall.net/media/2020/10/samsung-refrigerator-clean-steel-rt50k6340sl.jpg"

            ],
            ["name"=>"Sony",
                "price"=>"200",
                "category"=>"Camera",
                "description"=>"A smart camera with 4GB ram and much more features",
                "gallery"=>"https://m.media-amazon.com/images/I/810+COpxeqL._AC_SS450_.jpg"
            ],
            ["name"=>"Dell",
            "price"=>"500",
            "category"=>"Laptop",
            "description"=>"A smart laptop with 4GB ram and much more features",
            "gallery"=>"https://i.dell.com/is/image/DellContent//content/dam/global-site-design/product_images/dell_client_products/notebooks/inspiron_notebooks/inspiron_14_7490/pdp/laptops-inspiron-14-7490-pdp-gallery504x350.jpg?fmt=jpg&wid=570&hei=400"

            ],
            ["name"=>"Huawei",
                "price"=>"400",
                "category"=>"LED TV",
                "description"=>"A smart TV with 4GB ram and much more features",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHIxhCBw3Nis1INbMPbT9mm5zPBDlM4ZTaKAoON-XY71TZh2ZsRVFlgDUHegzEotIrmQg&usqp=CAU"
            ]

        ]);

    }
}
