<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionAccountTable extends Migration {

	public function up()
	{
		Schema::create('permission_account', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('account_id')->unsigned();
			$table->integer('permission_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('permission_account');
	}
}