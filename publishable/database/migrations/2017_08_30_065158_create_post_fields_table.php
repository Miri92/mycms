<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned();

            // add foreign key constraint
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('field_key');
            $table->string('field_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_fields');
    }
}
