<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        /* Laravel recomienda que cuando hagamos una table de 'n' a 'n', esa tabla debe
        llevar el nombre de forma singular de las dos tablas relacionadas*/
        Schema::create('article_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_article')->unsigned();
            $table->integer('id_tag')->unsigned();
            $table->foreign('id_article')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('id_tag')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('article_tag');
        Schema::dropIfExists('tags');
    }
}
