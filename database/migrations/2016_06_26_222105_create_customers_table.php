<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('second_name');
            $table->string('last_name');
            $table->string('second_last_name');
            $table->string('email');
            $table->string('telephone');
            $table->string('cellphone');
            $table->string('position');
            $table->string('company');
            $table->string('NIT');
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
        Schema::drop('customers');
    }
}
