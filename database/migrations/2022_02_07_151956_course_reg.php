<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourseReg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('courseReg', function(Blueprint $table){
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('courseCode')->nullable();
            $table->bigInteger('courseTitle')->nullable();
            $table->bigInteger('unit')->nullable();
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
