<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches_players', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('player_id');
            // $table->unsignedBigInteger('matche_id');
            $table->foreignId('player_id')->constrained('players');
            $table->foreignId('match_id')->constrained('matches');
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
        Schema::dropIfExists('matches_players');
    }
}
