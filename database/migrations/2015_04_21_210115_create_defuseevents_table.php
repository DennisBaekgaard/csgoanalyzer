<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefuseeventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('defuseevents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("defuser_steamid");
			$table->boolean("has_kit");
			$table->boolean("aborted");
			$table->integer("aborted_time");
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
		Schema::drop('defuseevents');
	}

}
