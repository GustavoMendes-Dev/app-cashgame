<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movement', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('type');
            $table->float('value');
            $table->integer('status');
            $table->integer('match_id')->nullable();
            $table->integer('payment');
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
        Schema::dropIfExists('movement');
    }
}
