<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Referencia')->unique();
            $table->string('Marca');
            $table->string('Descripcion');
            $table->decimal('Precio');
            $table->string('Thumbnail');
            $table->string('minetype')->default('image/png');
            $table->integer('whoedit')->default(1);

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
        Schema::drop('Productos');
    }
}
