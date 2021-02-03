<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenurestoranasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menurestoranas', function (Blueprint $table) {
            $table->id('idjela');
            $table->timestamps();
            $table->string('imgpath');
            $table->string('restoranID');
            $table->string('jelo');
            $table->integer('cijena');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menurestoranas');
    }
}
