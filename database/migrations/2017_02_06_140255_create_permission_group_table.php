<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionGroupTable extends Migration {

	public function up()
	{
		Schema::create('permission_group', function(Blueprint $table) {
			$table->increments('id');
			$table->string('permission_group_name', 20);
			$table->tinyInteger('active')->default('1');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('permission_group');
	}
}