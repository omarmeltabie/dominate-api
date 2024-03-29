<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
            $table->engine="InnoDB";

            $table->increments('id');

            $table->string('subject');
            $table->text('body');
            $table->string('status');

            $table->integer('sender_id')->unsigned();
            $table->foreign('sender_id')->references('id')->on('users');

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
		Schema::drop('messages');
	}

}
