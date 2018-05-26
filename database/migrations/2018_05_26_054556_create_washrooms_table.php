<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWashroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location_description');
            $table->string('open_hours');

            $table->string('latitude',20)->nullable();
            $table->string('longitude',20)->nullable();
            $table->boolean('is_sponsored', false, true);

            $table->boolean('gender_is_female_only');
            $table->boolean('gender_is_male_only');
            $table->boolean('gender_is_unisex');
            $table->boolean('gender_has_both');

            $table->boolean('is_free');
            $table->boolean('need_membership');

            $table->boolean('has_water');
            $table->boolean('has_soap');
            $table->boolean('has_shower');

            $table->boolean('has_wifi');
            $table->boolean('has_tv');

            $table->boolean('has_tissues');
            $table->boolean('has_bidet');
            $table->boolean('is_pwd_friendly');

            $table->boolean('has_vending_machine');
            $table->boolean('has_diaper_station');


            $table->integer('establishment_id', false, true);
            $table->foreign('establishment_id')->references('id')->on('establishments');
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
        Schema::dropIfExists('washrooms');
    }
}
