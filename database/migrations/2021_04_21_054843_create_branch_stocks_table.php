<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_stocks', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_date');
            $table->bigInteger('consignment_id')->unsigned();
            $table->string('chesis_no');
            $table->string('chalan_no');
            $table->string('engine');
            $table->string('model');
            $table->string('fiscal');
            $table->string('color');
            $table->string('deliverFrom');
            $table->string('deliverTo');
            $table->string('driver_name');
            $table->string('mobile_no');
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
        Schema::dropIfExists('branch_stocks');
    }
}
