<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createquiztable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('quiz');
    }
};
