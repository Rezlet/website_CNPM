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
            "thumbnail" => "abc",
            "price" => "200",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "product_2",
            "category_id" => 1,
            "thumbnail" => "abc",
            "price" => "300",
            "discount" => "10",
            "description" => "this is description"
        ]);
    }
}
