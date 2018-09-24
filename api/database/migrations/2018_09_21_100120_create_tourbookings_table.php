<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourbookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourbookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('packageId');
            $table->string('email');
            $table->string('fromDate');
            $table->string('toDate');
            $table->string('regDate');
            $table->integer('status');
            $table->string('cancelledBy');
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
        Schema::dropIfExists('tourbookings');
    }
}
