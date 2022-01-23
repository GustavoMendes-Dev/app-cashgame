<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignMatchPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_match_players', function (Blueprint $table) {
            $table->unsignedBigInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matchs')->onDelete('cascade');;
            $table->unsignedBigInteger('player_id');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');;
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
        Schema::dropIfExists('foreign_match_players');
    }
}
