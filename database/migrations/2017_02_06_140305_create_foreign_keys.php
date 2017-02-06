<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('account', function(Blueprint $table) {
			$table->foreign('access_type_id')->references('id')->on('access_type')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('permission_account', function(Blueprint $table) {
			$table->foreign('account_id')->references('id')->on('account')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('permission_account', function(Blueprint $table) {
			$table->foreign('permission_id')->references('id')->on('permission')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('permission', function(Blueprint $table) {
			$table->foreign('permission_group_id')->references('id')->on('permission_group')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('account', function(Blueprint $table) {
			$table->dropForeign('account_access_type_id_foreign');
		});
		Schema::table('permission_account', function(Blueprint $table) {
			$table->dropForeign('permission_account_account_id_foreign');
		});
		Schema::table('permission_account', function(Blueprint $table) {
			$table->dropForeign('permission_account_permission_id_foreign');
		});
		Schema::table('permission', function(Blueprint $table) {
			$table->dropForeign('permission_permission_group_id_foreign');
		});
	}
}