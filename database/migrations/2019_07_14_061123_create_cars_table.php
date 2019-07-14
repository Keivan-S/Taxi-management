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
            $table->text('plate'); //پلاک
            $table->integer('system_id'); //سیستم سمند
            $table->integer('model');
            $table->text('motor_serial');
            $table->text('gas_card_number');
            $table->text('chassis_serial');
            $table->integer('type');
            $table->date('insurance_expire'); //انقضای بیمه
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
