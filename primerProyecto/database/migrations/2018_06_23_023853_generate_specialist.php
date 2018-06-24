<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GenerateSpecialist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Specialists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('specialism');
            $table->unsignedInteger('user_specialist')->nullable();
            $table->foreign('user_specialist')->references('id')->on('Users');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Specialists');
    }
}
