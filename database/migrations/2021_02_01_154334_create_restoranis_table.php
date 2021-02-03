<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestoranisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restoranis', function (Blueprint $table) {
            $table->id('idrestorana');
            $table->timestamps();
            $table->string('naziv');
            $table->string('grad');
            $table->string('adresa');
            $table->string('email');
            $table->string('telefon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restoranis');
    }
}
