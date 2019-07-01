<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBorrow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow', function (Blueprint $table) {
            $table->Increments('id')->comment("id for room autoincrement");
            $table->integer('room_id')->comment("id room in table room");
            $table->string('name',200)->comment("name activity in borrow like merried or the others");
            $table->string('borrower',100)->comment("name or id borrower");
            $table->dateTime('start_date')->comment("start date in this borrow");
            $table->dateTime('end_date')->comment("end date in this borrow");
            $table->dateTime('booking')->comment("date booking borrower");
            $table->integer('status')->comment("status for borrow");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrow');
    }
}
