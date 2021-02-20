<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('descripcion');
            $table->string('imagen');
            $table->string('extract');
            $table->unsignedBigInteger('id_tag');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_categori');
            
            //llaves foraneas
            $table->foreign('id_tag')->references('id')->on('post_tag');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_categori')->references('id')->on('categori');

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
        Schema::dropIfExists('post');
    }
}
