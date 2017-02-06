<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountTable extends Migration {

	public function up()
	{
		Schema::create('account', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 10)->nullable()->default('Mr');
			$table->timestamps();
			$table->string('firstname', 70)->nullable();
			$table->string('lastname', 70)->nullable();
			$table->string('telephone', 20)->nullable();
			$table->string('mobile', 20)->nullable();
			$table->string('fax', 20)->nullable();
			$table->string('attachment_document', 255)->nullable();
			$table->tinyInteger('access_type_id')->default('2');
			$table->tinyInteger('active')->default('1');
		});
	}

	public function down()
	{
		Schema::drop('account');
	}
}