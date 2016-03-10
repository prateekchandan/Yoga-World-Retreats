<?php

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
        Schema::dropIfExists('countries');
        Schema::dropIfExists('users');
        Schema::dropIfExists('business');

        Schema::create('countries', function (Blueprint $table) {
            $table->string('name')->index();
            $table->string('iso');
            $table->string('isd_code');
            $table->string('currency');
            $table->string('symbol');
            $table->string('region');
            $table->double('dollar_value');
            $table->timestamp('created_at');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->integer('business')->unsigned()->nullable();

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('business', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->longtext('description')->nullable();
            $table->string('city')->nullable();
            
            $table->string('country')->nullable();
            $table->foreign('country')->references('name')->on('countries')->onDelete('cascade');

            $table->integer('owner')->unsigned();
            $table->foreign('owner')->references('id')->on('users')->onDelete('cascade');

            $table->string('phone')->nullable();


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
        Schema::dropIfExists('business');
        Schema::dropIfExists('users');
        Schema::dropIfExists('countries');
    }
}
