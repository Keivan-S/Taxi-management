<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->Increments('id');
            $table->text('plate');
            $table->integer('system_id');
            $table->integer('model');
            $table->text('motor_serial');
            $table->text('gas_card_number');
            $table->text('chassis_serial');
            $table->integer('type');
            $table->date('insurance_expire');
            $table->softDeletes();
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
        Schema::dropIfExists('cars');
    }
}
