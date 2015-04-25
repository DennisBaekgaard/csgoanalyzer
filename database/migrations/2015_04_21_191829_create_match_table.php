<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('match', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("map");
			$table->integer("start_tick");
			$table->integer("end_tick");
			$table->integer("team_one");
			$table->integer("team_two");
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
		Schema::drop('match');
	}

}
