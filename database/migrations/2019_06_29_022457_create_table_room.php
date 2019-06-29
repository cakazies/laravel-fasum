<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->Increments('id')->comment("id for room autoincrement");
            $table->string('name',100)->comment("name for per room");
            $table->string('place',200)->comment("place for room");
            $table->integer('price')->comment("price for per rooms");
            $table->integer('status')->comment("status for rooms");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('room');
    }
}
