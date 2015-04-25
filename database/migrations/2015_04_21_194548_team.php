<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Team extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("match_id");
			$table->integer("player_one");
			$table->integer("player_two");
			$table->integer("player_three");
			$table->integer("player_four");
			$table->integer("player_five");
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
		Schema::drop('team');
	}

}
