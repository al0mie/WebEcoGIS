<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('coordinate_transform')->nullable();
            $table->enum('coordinate_type', array('geographical_type', 'rectangle_type'))->nullable();
            $table->string('coordinate_value_minX')->nullable();
            $table->string('coordinate_value_minY')->nullable();
            $table->string('coordinate_value_minB')->nullable();
            $table->string('coordinate_value_minL')->nullable();
            $table->integer('size_element')->nullable();
            $table->integer('number_elementX')->nullable();
            $table->integer('number_elementY')->nullable();
            $table->integer('absolute_height')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
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
