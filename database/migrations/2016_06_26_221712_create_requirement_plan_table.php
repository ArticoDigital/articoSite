<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirement_plan', function(Blueprint $table){
            $table->increments('id');
            $table->integer('plan_id')->unsigned();
            $table->integer('requirement_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->foreign('requirement_id')->references('id')->on('requirements');
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
        Schema::drop('requirement_plan');
    }
}
