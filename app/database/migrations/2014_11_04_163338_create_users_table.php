<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('username', 50);
            $table->string('email', 60);            
            $table->string('fname', 50);
            $table->string('lname', 50);
			$table->string('number', 20)->unique();
			$table->string('password', 60);
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
		Schema::drop('users', function(Blueprint $table)
		{
			//
		});
	}

}
