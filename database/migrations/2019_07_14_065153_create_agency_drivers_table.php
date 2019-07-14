<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencyDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_drivers', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id');
            $table->integer('car_id');
            $table->integer('agency_id');
            $table->string('license_number', 100);
            $table->date('license_expire');
            $table->integer('ِdriver_license_type');
            $table->string('driver_license_serial', 100);
            $table->date('driver_license_expire');
            $table->string('code', 30)->unique();
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
        Schema::dropIfExists('agency_drivers');
    }
}
