<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('himpunan');
            $table->string('placeofbirth');
            $table->string('dateofbirth');
            $table->string('gender');
            $table->string('email');
            $table->string('phone_number');
            $table->string('phone_number_guardians');
            $table->string('religion');
            $table->string('address');
            $table->string('address_2');
            $table->string('tk');
            $table->string('sd');
            $table->string('smp');
            $table->string('sma');
            $table->string('organization');
            $table->string('committee');
            $table->string('development');
            $table->string('achievement');
            $table->string('password');
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
