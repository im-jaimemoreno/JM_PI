<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->default(0);
            $table->mediumText('bio')->nullable();
            $table->string('tweeter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('website')->nullable();
            $table->string('photo')->default('dummy-icon.png');
            $table->string('minetype')->default('image/png');
            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::drop('user_profile');
    }
}
