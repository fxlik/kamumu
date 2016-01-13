<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event',function(Blueprint $table){
            $table->increments('id');
            $table->string('nama_event');
            $table->datetime('waktu');
            $table->string('tempat');
            $table->text('keterangan');
            $table->string('iduser');
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
        //
    }
}
