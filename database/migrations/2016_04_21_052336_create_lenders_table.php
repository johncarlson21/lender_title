<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenders', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 100);
			$table->string('address', 100);
			$table->string('address2', 100);
			$table->string('city', 100);
			$table->string('state', 2);
			$table->string('postcode', 10);
			$table->string('phone', 12);
			$table->string('contact_name', 100);
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
        Schema::drop('lenders');
    }
}
