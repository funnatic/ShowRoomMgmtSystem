<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('staff_id')->unsigned();
            $table->bigInteger('costumer_id')->unsigned();
            $table->string('passcode');
            $table->string('date');
            $table->string('registration_no');
            $table->string('chalan_no');
            $table->string('invoice_no');
            $table->string('inventory_id');
            $table->string('chasis');
            $table->string('engine');
            $table->string('model');
            $table->string('color');
            $table->string('value');
            $table->string('discount');
            $table->string('net_value');
            $table->string('costumer_name');
            $table->string('approval_image');
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
        Schema::dropIfExists('sells');
    }
}
