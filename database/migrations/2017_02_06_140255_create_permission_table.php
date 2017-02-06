<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionTable extends Migration {

	public function up()
	{
		Schema::create('permission', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 30);
			$table->string('controller_name', 30);
			$table->tinyInteger('active')->default('1');
			$table->integer('permission_group_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('permission');
	}
}