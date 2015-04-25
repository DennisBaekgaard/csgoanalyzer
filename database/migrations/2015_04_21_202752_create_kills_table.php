<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kills', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("killer_steamid");
			$table->string("killer_position");
			$table->integer("killed_player_steamid");
			$table->string("killed_player_position");
			$table->boolean("headshot");
			$table->integer("penetrated_objects_num");
			$table->integer("assisting_player_steamid");
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
		Schema::drop('kills');
	}

}
