<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('post_id')->unsigned();
        
            $table->string("comment");
        
            $table->timestamps();
        
            $table->foreign('post_id')->references('id')->on('posts')
        
                ->onDelete('cascade');
        
        });
    }

    /** 
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
