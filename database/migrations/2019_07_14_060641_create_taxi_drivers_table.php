<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxiDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxi_drivers', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id');
            $table->text('license_number');
            $table->date('license_expire');
            $table->integer('taxi_id');
            $table->integer('vac_priv');
            $table->integer('status');
            $table->integer('ِdriver_license_type');
            $table->string('driver_license_serial', 100);
            $table->date('driver_license_expire');
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
        Schema::dropIfExists('taxi_drivers');
    }
}
