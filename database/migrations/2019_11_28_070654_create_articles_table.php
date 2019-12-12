<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('5pilar_articles', function (Blueprint $table) {
            $table->bigIncrements('id_article');
            $table->string('title_article',100);
            $table->string('slug_article',150);
            $table->string('author_article',100);
            $table->date('date_article');
            $table->string('descript_article',255);
            $table->text('content_article');
            $table->string('img_article',100);
            $table->string('img1920x800_article',100);
            $table->string('img380x250_article',100);
            $table->enum('lang_article', ['ID', 'US', 'SA']);
            $table->enum('cate_article', ['em', 'ep', 'ef', 'eb', 'xx']);
            $table->char('foreword_article',3);
            $table->enum('status_article', ['publish', 'draf']);
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
        Schema::dropIfExists('articles');
    }
}
