<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('salary')->nullable();
            $table->date('closing_date')->nullable();
            $table->string('email')->nullable();

            $table->timestamps();

            $table->string('geo_location_id')->nullable();
            $table->foreign('geo_location_id')->references('id')->on('geo_locations');

            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');

            $table->integer('contract_type_id')->unsigned()->default(1);
            $table->foreign('contract_type_id')->references('id')->on('contract_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
