<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("admins")->insert([
            "name" => "admin",
            "password" => "admin",
            "email" => "user@gmail.com",
         
        ]);

        DB::table("admins")->insert([
            "name" => "Tạ Thạch Lỗi",
            "password" => Hash::make("boi000biet"),
            "email" => "thanhtrollvt02@gmail.com",
        ]);
    }
}
