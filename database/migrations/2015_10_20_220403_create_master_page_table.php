<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PaginaMaestra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PhotoHero')->default('hero1.jpg');
            $table->string('minetype')->default('image/jpeg');
            $table->string('Title')->default('INNOVACION Y FLEXIBIBLIDAD');
            $table->string('content')->default('Resultados de calidad');

            $table->string('whoedit')->default(1);

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
        Schema::drop('PaginaMaestra');
    }
}
