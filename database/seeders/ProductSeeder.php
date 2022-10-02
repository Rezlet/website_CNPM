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
            "title" => "product_1",
            "category_id" => 1,
            "thumbnail" => "https://product.hstatic.net/1000026716/product/r8ga_15109189103c4dd7b706dfd168dbed04_large.png",
            "price" => "10000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "product_2",
            "category_id" => 1,
            "thumbnail" => "https://product.hstatic.net/1000026716/product/58u4_6f1406b6cbfb4dc6981a85634556a55a_large.png",
            "price" => "30000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "product_3",
            "category_id" => 1,
            "thumbnail" => "https://product.hstatic.net/1000026716/product/52sp_a41f57a6e3714169a8394698e9abb0a9_large.png",
            "price" => "60000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "product_4",
            "category_id" => 1,
            "thumbnail" => "https://product.hstatic.net/1000026716/product/1_d3a1aae9b24a43bf830b120c98286c52_large.png",
            "price" => "70000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "product_5",
            "category_id" => 1,
            "thumbnail" => "https://product.hstatic.net/1000026716/product/751_8c7bdc9120554e21bcf7ff7defe5eb99_large.png",
            "price" => "800000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "product_6",
            "category_id" => 1,
            "thumbnail" => "https://product.hstatic.net/1000026716/product/gearvn-laptop-msi-modern-15-a5m-239vn-1_ddf341e82d2c4afcbcff253a76f13ceb_large.jpg",
            "price" => "800000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "product_7",
            "category_id" => 1,
            "thumbnail" => "https://product.hstatic.net/1000026716/product/2uvn-fix_26d0dc18e50744dbb15750de4b15a9c8_large.png",
            "price" => "8000000",
            "discount" => "10",
            "description" => "this is description"
        ]);


        DB::table('products')->insert([
            "title" => "product_8",
            "category_id" => 1,
            "thumbnail" => "https://product.hstatic.net/1000026716/product/l1421w_2b115562199d462b82b92e89e95b2473_large.png",
            "price" => "800000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "product_9",
            "category_id" => 1,
            "thumbnail" => "https://product.hstatic.net/1000026716/product/laptop-asus-zenbook-ux325ea-kg656w_33160483676c416081a2d4c83e86306f_large.png",
            "price" => "800000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "product_10",
            "category_id" => 1,
            "thumbnail" => "https://product.hstatic.net/1000026716/product/l1421w_2b115562199d462b82b92e89e95b2473_large.png",
            "price" => "800000",
            "discount" => "10",
            "description" => "this is description"
        ]);

    }
}
