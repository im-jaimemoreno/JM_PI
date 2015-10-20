<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contactenos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('whoedit')->unsigned()->default(1);
            $table->string('phone');
            $table->string('mobile');
            $table->string('adress');
            $table->string('mail');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('pinterest');
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
        Schema::drop('Contactenos');
    }
}
