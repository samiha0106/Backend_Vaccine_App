<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->string('occupation');
            $table->string('maritial status');
            $table->integer('date of birth');
            $table->integer('phone no');
            $table->string('address');
            $table->string('zone');
            $table->bigInteger('hospital_id')->unsigned();
            $table->string('vaccine_center');
            $table->integer('date of vaccine');
            $table->integer('time of vaccine');
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete("cascade");
            
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
        Schema::dropIfExists('registrations');
    }
}
