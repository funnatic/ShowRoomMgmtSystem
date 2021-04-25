<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventory1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory1s', function (Blueprint $table) {
            $table->id();
            $table->string("passcode");
            $table->string('date');
            $table->string('reference_no');
            $table->string('invoice_no');
            $table->string('exporter');
            $table->string('importer');
            $table->string('truck_no');
            $table->string('costum_office');
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
        Schema::dropIfExists('inventory1s');
    }
}
