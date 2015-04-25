<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBombeventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bombevents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("planter_steamid");
			$table->integer("start_plant_time");
			$table->string("site");
			$table->boolean("aborted");
			$table->integer("abort_time");
			$table->string("plant_position");
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
		Schema::drop('bombevents');
	}

}
