<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacs', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id');
            $table->date('from');
            $table->date('to');
            $table->text('destnation')->nullable();
            $table->integer('is_global');
            $table->integer('duration');
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
        Schema::dropIfExists('vacs');
    }
}
