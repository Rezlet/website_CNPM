<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "role_id" => 1,
            "name" => "manager_1",
            "password" => "manager_1",
            "email" => "manager_1@gmail.com",

            "deleted_at" => date("Y-m-d")
        ]);

        DB::table("users")->insert([
            "role_id" => 2,
            "name" => "admin",
            "password" => "admin",
            "email" => "admin@gmail.com",

            "deleted_at" => date("Y-m-d")
        ]);

        DB::table("users")->insert([
            "role_id" => 3,
            "name" => "user",
            "password" => "user",
            "email" => "user@gmail.com",

            "deleted_at" => date("Y-m-d")
        ]);

        DB::table("users")->insert([
            "role_id" => 1,
            "name" => "manager_2",
            "password" => "manager_2",
            "email" => "manager_2@gmail.com",
            "deleted_at" => date("Y-m-d")
        ]);
    }
}
