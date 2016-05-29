<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorderValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('border_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned()->nullable();
            $table->enum('left_border', array('pereodic_conditions', 'hard_wall', 'free_wall'))->nullable();
            $table->float('degree_surface_liquid')->nullable();
            $table->float('liquid_depth')->nullable();
            $table->float('angle_normal_vector_liquid')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('border_settings', function (Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('set null');
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
