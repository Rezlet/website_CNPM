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
            "username" => "manager_1",
            "password" => "manager_1",
            "email" => "manager_1@gmail.com",

            "delete_at" => date("Y-m-d")
        ]);

        DB::table("users")->insert([
            "role_id" => 2,
            "username" => "admin",
            "password" => "admin",
            "email" => "admin@gmail.com",

            "delete_at" => date("Y-m-d")
        ]);

        DB::table("users")->insert([
            "role_id" => 3,
            "username" => "user",
            "password" => "user",
            "email" => "user@gmail.com",

            "delete_at" => date("Y-m-d")
        ]);

        DB::table("users")->insert([
            "role_id" => 1,
            "username" => "manager_2",
            "password" => "manager_2",
            "email" => "manager_2@gmail.com",
            "delete_at" => date("Y-m-d")
        ]);
    }
}
