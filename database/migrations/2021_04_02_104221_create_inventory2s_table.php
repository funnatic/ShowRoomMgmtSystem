<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventory2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory2s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('inventory1_id')->unsigned();
            $table->string('chalan_no');
            $table->string('chasis');
            $table->string('engine');
            $table->string('capacity');
            $table->string('fuel');
            $table->string('color');
            $table->string('brand');
            $table->string('model');
            $table->string('delivery_date');
            $table->string('consignment_id');
            $table->string('deliverFrom');
            $table->string('deliverTo');
            $table->string('passcode');
            $table->string('driver_name');
            $table->string('driver_contact');
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
        Schema::dropIfExists('inventory2s');
    }
}
