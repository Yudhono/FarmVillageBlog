<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contacts', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('e_mail');
        $table->string('phone_number');
        $table->string('wilayah');
        $table->string('daerah');
        $table->text('body');
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
        Schema::drop('contacts');
    }
}
