<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePostTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_post');
            $table->unsignedBigInteger('id_tag');
            $table->unsignedBigInteger('posts_id');
            $table->unsignedBigInteger('tags_id');

            $table->foreign('tags_id')->references('id')->on('tags');
            $table->foreign('id_post')->references('id')->on('tags');
            
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
        Schema::dropIfExists('post_tag');
    }
}
