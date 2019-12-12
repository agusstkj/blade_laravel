<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('5pilar_contributors', function (Blueprint $table) {
            $table->bigIncrements('id_contributor');
            $table->string('name_contributor',100);
            $table->string('title_contributor',100);
            $table->text('desc_contributor');
            $table->text('content_contributor');
            $table->text('edu_contributor');
            $table->text('exp_contributor');
            $table->string('img_contributor',100);
            $table->enum('lang_contributor', ['ID', 'US', 'SA']);
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
        Schema::dropIfExists('contributors');
    }
}
