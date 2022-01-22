<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
             $table->id();
             $table->string('match_name');
             $table->date('date');
             $table->string('host_name');
             $table->string('guest_name');
             $table->timestamps();
             //$table->foreignId('user_id')->constrained('users');


              // $table->unsignedBigInteger('team_id')->nullable();
            //  $table->string('host_team');
            //  $table->string('guest_team');
             //$table->foreign('team_id')->references('id')->on('teams');
            //  $table->foreignId('host_team')->constrained('teams');
            //  $table->foreignId('guest_team')->constrained('teams');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
