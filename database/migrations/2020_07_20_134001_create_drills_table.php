<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('category_name');
            $table->string('problem0');
            $table->string('problem1');
            $table->string('problem2');
            $table->string('problem3');
            $table->string('problem4');
            $table->string('problem5');
            $table->string('problem6');
            $table->string('problem7');
            $table->string('problem8');
            $table->string('problem9');
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
        Schema::dropIfExists('drills');
    }
}
