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
            $table->string('name');
            $table->string('password');
            $table->string('numberphone')->default("");
            $table->string('email')->unique();
            $table->string('address');
            $table->date("deleted_at")->nullable()->default(null);
            $table->rememberToken();
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent()->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
