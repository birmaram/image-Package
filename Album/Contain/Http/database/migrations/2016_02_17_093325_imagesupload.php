<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imagesupload extends Migration
{
    public function up()
     {
      Schema::create('imagesnew', function(Blueprint $table)
      {
          $table->increments('id');
          $table->string('title');
          $table->text('description');
          $table->string('filePath');
          $table->timestamps();
      });
  }

    public function down()
    {
        //
    }
}
