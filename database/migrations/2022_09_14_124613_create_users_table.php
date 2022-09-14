<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("role_id")->constrained("roles");
            $table->string("username", 30)->unique();
            $table->string("password", 15);
            $table->string("email", 30)->unique();
            $table->date("delete_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
