<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourpackages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('packageName');
            $table->string('packageType');
            $table->string('packageLocation');
            $table->string('packagePrice');
            $table->string('packageFeatures');
            $table->string('packageImage');
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
        Schema::dropIfExists('tourpackages');
    }
}
