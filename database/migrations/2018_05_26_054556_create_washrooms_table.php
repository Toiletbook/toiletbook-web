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
            $table->string('open_hours')->nullable();

            $table->string('latitude',20)->nullable();
            $table->string('longitude',20)->nullable();
            $table->boolean('is_sponsored', false, true)->default(false);

            $table->boolean('gender_is_female_only')->default(false);
            $table->boolean('gender_is_male_only')->default(false);
            $table->boolean('gender_is_unisex')->default(false);
            $table->boolean('gender_has_both')->default(false);

            $table->boolean('is_free')->default(true);
            $table->boolean('need_membership')->nullable();

            $table->boolean('has_water')->nullable();
            $table->boolean('has_soap')->nullable();
            $table->boolean('has_shower')->nullable();

            $table->boolean('has_wifi')->nullable();
            $table->boolean('has_tv')->nullable();

            $table->boolean('has_tissues')->nullable();
            $table->boolean('has_bidet')->nullable();
            $table->boolean('is_pwd_friendly')->nullable();

            $table->boolean('has_vending_machine')->nullable();
            $table->boolean('has_diaper_station')->nullable();


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
