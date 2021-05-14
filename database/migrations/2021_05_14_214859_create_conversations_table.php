<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();

            //user
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            //contact
            $table->unsignedBigInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('users');

            //last message: content and date
            $table->text('last_message');
            $table->dateTime('last_time');

            $table->boolean('listen_notifications')->default(true);
            $table->boolean('has_blocked')->default(false);


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
        Schema::dropIfExists('conversations');
    }
}
