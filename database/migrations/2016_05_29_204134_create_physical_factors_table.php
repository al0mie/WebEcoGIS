<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_factors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->float('circulation period')->nullable();
            $table->float('geographical_width_floor_border')->nullable();
            $table->float('geographical_width_top_border')->nullable();
            $table->float('acceleration_free_fall')->nullable();

            $table->float('heterogeneity_level_seabed')->nullable();
            $table->float('number_manning')->nullable();
            $table->float('b_parameter')->nullable();

            $table->float('level_turbulence_liquid')->nullable();
            $table->float('level_kinematic_viscosity')->nullable();

            $table->float('infiltration_level')->nullable();
            $table->float('effective_depth_soil_layer')->nullable();
            $table->float('infiltration_level_from_layer_A')->nullable();
            $table->float('evaporation_level')->nullable();

            $table->float('wind_speed')->nullable();
            $table->float('wind_direction')->nullable();
            $table->float('wind_coef')->nullable();
            $table->float('density_air_water')->nullable();

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
        //
    }
}
