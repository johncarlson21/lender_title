<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address', 100);
            $table->string('address2', 100)->nullable();
            $table->string('city', 100);
            $table->string('state', 2);
            $table->string('postcode', 10);
            $table->string('phone', 12);
            $table->integer('title_company_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->integer('lender_id')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
