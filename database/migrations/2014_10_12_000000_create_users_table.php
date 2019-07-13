<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            $table->increments('id');
            $table->integer('role_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('password');
            $table->string('mobile_no')->unique();
            $table->string('tell')->nullable();
            $table->String('nID', 10)->unique();
            $table->String('sID', 10)();
            $table->Date('birth_date');
            $table->text('address');
            $table->integer('gender');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
