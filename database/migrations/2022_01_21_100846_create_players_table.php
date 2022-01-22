<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('team_id')->nullable();
             $table->string('name');
             $table->string('user_name')->uniqid();
             $table->enum('def_pos',['offensive','defensive','midfielder','right winger','left winger','goal keeper']);
             $table->integer('phone');
             $table->string('email')->unique();
             $table->timestamp('email_verified_at')->nullable();
            //  $table->string('password');
             $table->timestamps();
             $table->rememberToken();
            //$table->foreign('team_id')->references('id')->on('teams');
            // $table->foreignId('team_id')->constrained('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
