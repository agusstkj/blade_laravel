<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create5pilarBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('5pilar_blog', function (Blueprint $table) {
            $table->increments('id_blog');
            $table->string('judul_blog',100);
            $table->string('slug_blog')->unique();
            $table->string('description_blog',100);
            $table->string('category_blog',50);
            $table->string('img500x280_blog',50);
            $table->string('img900x450_blog',50);
            $table->string('author_blog',50);
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
        Schema::dropIfExists('5pilar_blog');
    }
}
