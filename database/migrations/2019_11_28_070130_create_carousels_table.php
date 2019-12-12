<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('5pilar_carousels', function (Blueprint $table) {
            $table->bigIncrements('id_carousel');
            $table->text('text1_carousel');
            $table->text('text2_carousel');
            $table->string('img_carousel',100);
            $table->enum('lang_carousel', ['ID', 'US', 'SA']);
            $table->enum('stat_carousel', ['Y', 'N']);
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
        Schema::dropIfExists('carousels');
    }
}
