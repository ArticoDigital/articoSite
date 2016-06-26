<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementQuotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirement_quotation', function(Blueprint $table){
            $table->increments('id');
            $table->integer('quotation_id')->unsigned();
            $table->integer('requirement_id')->unsigned();
            $table->foreign('quotation_id')->references('id')->on('quotations');
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
        Schema::drop('requirement_quotation');
    }
}
